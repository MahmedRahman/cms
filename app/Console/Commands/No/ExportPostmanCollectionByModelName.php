<?php

namespace App\Console\Commands;

use Closure;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Route;
use ReflectionClass;
use Illuminate\Filesystem\Filesystem;

class ExportPostmanCollectionByModelName extends Command
{
    protected $signature = 'export:postman-model {model? : The name of the model to export routes for} {filename=postman_collection.json}';
    protected $description = 'Export routes to a Postman collection file, organized by model name. Optionally export all models.';

    public function handle()
    {
        $routes = Route::getRoutes();
        $modelName = $this->argument('model');
        $collection = [
            'info' => [
                'name' => $modelName ? "{$modelName} API" : "All Models API",
                '_postman_id' => uniqid(),
                'description' => $modelName ? "Routes for the {$modelName} model" : "Routes for all models",
                'schema' => 'https://schema.getpostman.com/json/collection/v2.1.0/collection.json',
            ],
            'item' => [],
        ];

        if ($modelName) {
            $models = [$modelName];
        } else {
            $models = $this->getAllModels();
        }

        foreach ($models as $model) {
            $routesByModel = [];

            foreach ($routes as $route) {
                if ($route->action['uses'] instanceof Closure) {
                    continue;
                }

                $modelFromRoute = $this->getModelFromClass($route->action['controller'] ?? '');
                if (!$modelFromRoute || ($modelName && $modelFromRoute !== $modelName)) {
                    continue;
                }

                $routesByModel[$modelFromRoute][] = $route;
            }

            foreach ($routesByModel as $model => $routes) {
                $folder = [
                    'name' => $model,
                    'item' => [],
                ];

                foreach ($routes as $route) {
                    $method = $route->methods()[0]; // Taking the first HTTP method
                    $uri = $route->uri();
                    $item = [
                        'name' => $uri,
                        'request' => [
                            'method' => $method,
                            'header' => [
                                [
                                    'key' => 'Content-Type',
                                    'value' => 'application/json',
                                ],
                            ],
                            'url' => [
                                'raw' => '{{base_url}}/' . $uri,
                                'host' => ['{{base_url}}'],
                                'path' => array_values(array_filter(explode('/', $uri))), // Clean up path segments
                            ],
                        ],
                        'response' => [],
                    ];

                    $folder['item'][] = $item;
                }

                if (!empty($folder['item'])) {
                    $collection['item'][] = $folder;
                }
            }
        }

        if (empty($collection['item'])) {
            $this->error("No routes found for the model(s)");
            return;
        }

        file_put_contents($this->argument('filename'), json_encode($collection, JSON_PRETTY_PRINT));
        $this->info("Postman collection exported to: " . $this->argument('filename'));
    }

    private function getModelFromClass($controllerAction)
    {
        $controller = explode('@', $controllerAction)[0];
        try {
            $reflectedController = new ReflectionClass($controller);
        } catch (\ReflectionException $e) {
            return null;
        }
        $controllerName = $reflectedController->getShortName();
        $modelName = str_replace('Controller', '', $controllerName);
        if (class_exists("App\\Models\\$modelName")) {
            return $modelName;
        }
        return null;
    }

    private function getAllModels()
    {
        $fs = new Filesystem();
        $modelFiles = $fs->files(app_path('Models'));
        $models = [];
        foreach ($modelFiles as $file) {
            $modelName = $file->getBasename('.php');
            if (class_exists("App\\Models\\$modelName")) {
                $models[] = $modelName;
            }
        }
        return $models;
    }
}

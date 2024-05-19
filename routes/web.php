<?php

use App\Http\Controllers\BlogController;
use App\Models\Blog;
use App\Models\Feedback;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request; // Make sure this is the correct Request class

Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
Route::get('/create', [BlogController::class, 'create'])->name('blog.create');

Route::delete('/blog', [BlogController::class, 'destroy'])->name('blog.destroy');



Route::post('/blog', [BlogController::class, 'dashBoardIndex'])->name('dashboard.blog.delete');
Route::post('/create', [BlogController::class, 'store'])->name('blog.store');

Route::get('/blogs/{id}', [BlogController::class, 'show'])->name('blog.show');


Route::get('/', function () {
    return view('web.index');
})->name('home');

Route::get('/admin', function () {
    return view('dashboard.login.index');
});

Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});





Route::get('/setting', function () {
    return view('dashboard.setting.index');
});

Route::get('/portfolio', function () {
    return view('dashboard.portfolio.index');
});

Route::get('/gallery', function () {
    return view('dashboard.gallery.index');
});

Route::get('/contact', function () {
    $feedback = Feedback::all();
    return view('dashboard.contact.index' ,  compact('feedback'));
});

Route::delete('/contact/{id}', function ($id) {
    $feedback = Feedback::find($id);
    if ($feedback) {
        $feedback->delete();
        return redirect('/contact')->with('success', 'Feedback deleted successfully');
    } else {
        return redirect('/contact')->with('error', 'Feedback not found');
    }
});

Route::post('/feedback', function (Request $request) {
    $feedback = new Feedback;
    $feedback->name = $request->input('name');  // Correct method to access request data
    $feedback->email = $request->input('email');
    $feedback->comment = $request->input('comment');


    if ($feedback->save()) {
        return redirect()->back()->with('success', 'Thank you for your message!');
    } else {
        return redirect()->back()->with('error', 'Failed to submit feedback');
    }
});





<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'title', 'content', 'author', 'created_at', 'updated_at'];

    protected $hidden = ['created_at', 'updated_at'];
}
<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'image', 'title', 'content', 'url'];

    protected $hidden = ['created_at', 'updated_at'];
}
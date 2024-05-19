<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'image', 'order'];

    protected $hidden = ['created_at', 'updated_at'];
}
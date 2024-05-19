<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'name', 'email', 'comment'];

    protected $hidden = ['created_at', 'updated_at'];
}
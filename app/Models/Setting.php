<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    public $timestamps = false;
    protected $fillable = ['id', 'setting_key', 'setting_value'];

    protected $hidden = ['created_at', 'updated_at'];
}
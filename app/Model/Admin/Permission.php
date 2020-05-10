<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    public $timestamps = true;

    protected $guarded = [''];
    protected $fillable = ['name'];
}

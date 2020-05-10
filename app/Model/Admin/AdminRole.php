<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class AdminRole extends Model
{
    public $timestamps = true;
    protected $guarded = [];

  
    

     public function permissions()
    {
        return $this
            ->belongsToMany(Permission::class,'admin_role_permissions')
            ->withTimestamps();
    }

    

}

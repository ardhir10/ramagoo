<?php

namespace App\Model\Admin;

use Illuminate\Database\Eloquent\Model;

class AdminRolePermission extends Model
{
    public $timestamps = true;
    protected $guarded = [''];
    protected $fillable = ['permission_id','admin_role_id'];

    public function permission()
    {
        return $this->hasOne(Permission::class);
    }
     
    public function AdminRole()
    {
        return $this->belongsTo(AdminRole::class);
    }
}

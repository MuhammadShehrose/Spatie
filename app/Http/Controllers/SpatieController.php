<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SpatieController extends Controller
{
    public function role()
    {
        $role = Role::create(['name' => 'writer']);
        return "Role Created";
    }

    public function permission()
    {
        $permission = Permission::create(['name' => 'edit articles']);
        return "Permission Created";
    }

    public function assign($id)
    {
        $role = $id;
        $role->givePermissionTo("1");
        return "Permission Assigned";
    }
}

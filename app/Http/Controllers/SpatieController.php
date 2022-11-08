<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class SpatieController extends Controller
{
    public function role()
    {
        $role = Role::create(['name' => 'admin']);
        return "Role Created";
    }

    public function permission()
    {
        $permission = Permission::create(['name' => 'edit articles']);
        return "Permission Created";
    }

    public function assign($id)
    {
        $role = Role::find($id);
        $permission = Permission::find($id);
        $role->givePermissionTo($permission);
        return "Permission Assigned";
    }

    public function user()
    {
        // return $users = User::permission('edit articles')->get();
        $role = Role::find(1);
        $role->givePermissionTo('edit articles');
        // return $role->permissions;
        // $user = User::find(1);
        // $user->assignRole('writer');
        // $permission = Permission::find(1);
        // $permissions = $user->getDirectPermissions();
        return "role granted";
    }
}

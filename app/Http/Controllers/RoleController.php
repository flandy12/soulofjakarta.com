<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(){    
        $admin = Role::create(['name' => 'administrator' ]);
        $redaktur = Role::create(['name' => 'redaktur' ]);
        $user = Role::create(['name' => 'user' ]);
        $permission = Permission::create(['name' =>'create']);
        $permission = Permission::create(['name' =>'edit']);
        $permission = Permission::create(['name' =>'delete']);
        return '<h1>Selamat Role Telah Berhasil Dibuat !</h1>';
    }
}   
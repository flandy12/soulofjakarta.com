<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index(){    
        $admin = Role::create(['name' => 'administrator' 
        ,'guard_name'=> 'web']);

        // $admin->givePermissionTo('create');
        // $admin->givePermissionTo('edit');
        // $admin->givePermissionTo('delet');

        $redaktur = Role::create(['name' => 'redaktur' ,'guard_name'=> 'web']);
        $operator = Role::create(['name' => 'operator','guard_name'=> 'web' ]);


        Permission::create(['name' =>'create']);
        Permission::create(['name' =>'edit']);
        Permission::create(['name' =>'delete']);
        
        
        return '<h1>Selamat Role Telah Berhasil Dibuat !</h1>';
    }
    public function givePermision(){    
        $admin 

        // $admin->givePermissionTo('create');
        // $admin->givePermissionTo('edit');
        // $admin->givePermissionTo('delet');

        // $redaktur = Role::create(['name' => 'redaktur' ,'guard_name'=> 'web']);
        // $operator = Role::create(['name' => 'operator','guard_name'=> 'web' ]);


        // Permission::create(['name' =>'create']);
        // Permission::create(['name' =>'edit']);
        // Permission::create(['name' =>'delete']);
        
        
        // return '<h1>Selamat Role Telah Berhasil Dibuat !</h1>';
    }
}   
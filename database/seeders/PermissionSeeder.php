<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        // reset cahced roles and permission
        // app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'view article']);
        Permission::create(['name' => 'create article']);
        Permission::create(['name' => 'edit article']);
        Permission::create(['name' => 'delete article']);

        Permission::create(['name' => 'view user']);
        Permission::create(['name' => 'create user']);
        Permission::create(['name' => 'edit user']);
        Permission::create(['name' => 'delete user']);

        Permission::create(['name' => 'view iklan']);
        Permission::create(['name' => 'create iklan']);
        Permission::create(['name' => 'edit iklan']);
        Permission::create(['name' => 'delete iklan']);

        //create roles and assign existing permissions
        $operator = Role::create(['name' => 'Operator','guard_name' => 'web']);
        $operator->givePermissionTo('view article');
        $operator->givePermissionTo('create article');
        $operator->givePermissionTo('edit article');
        $operator->givePermissionTo('delete article');

        $adminRole = Role::create(['name' => 'Administrator','guard_name' => 'web']);
        $adminRole->givePermissionTo('view article');
        $adminRole->givePermissionTo('create article');
        $adminRole->givePermissionTo('edit article');
        $adminRole->givePermissionTo('delete article');
        
        $adminRole->givePermissionTo('view user');
        $adminRole->givePermissionTo('create user');
        $adminRole->givePermissionTo('edit user');
        $adminRole->givePermissionTo('delete user');

        $adminRole->givePermissionTo('view iklan');
        $adminRole->givePermissionTo('create iklan');
        $adminRole->givePermissionTo('edit iklan');
        $adminRole->givePermissionTo('delete iklan');
  
        $superadminRole = Role::create(['name' => 'super-admin']);
        // gets all permissions via Gate::before rule

        // create demo users
        $user = User::factory()->create([
            'name' => 'Aldy',
            'email' => 'aldy@gmail.com',
            'password' => bcrypt('aldy12')
        ]);
        $user->assignRole($operator);

        $user = User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin12')
        ]);
        $user->assignRole($adminRole);

        $user = User::factory()->create([
            'name' => 'Flandy',
            'email' => 'halloflandy@gmail.com',
            'password' => bcrypt('admin12')
        ]);
        $user->assignRole($superadminRole);
    }
}

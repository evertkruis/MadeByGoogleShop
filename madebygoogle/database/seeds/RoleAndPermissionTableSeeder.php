<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleAndPermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()['cache']->forget('spatie.permission.cache');

        // PERMISSIONS

        // Products
        Permission::create(['name' => 'create products']);
        Permission::create(['name' => 'edit products']);
        Permission::create(['name' => 'delete products']);

        // Categories
        Permission::create(['name' => 'create categories']);
        Permission::create(['name' => 'edit categories']);
        Permission::create(['name' => 'delete categories']);

        // Reviews
        Permission::create(['name' => 'create reviews']);
        Permission::create(['name' => 'edit reviews']);
        Permission::create(['name' => 'delete reviews']);

        // Users
        Permission::create(['name' => 'create users']);
        Permission::create(['name' => 'edit users']);
        Permission::create(['name' => 'delete users']);

        // ROLES
        $role = Role::create(['name' => 'owner']);
        $role->givePermissionTo(Permission::all());

        $role = Role::create(['name' => 'customer']);
        $role->givePermissionTo('create reviews');
    }
}

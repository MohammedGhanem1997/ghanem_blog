<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Spatie\Permission\PermissionRegistrar;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        app()[PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'edit  test35']);
        Permission::create(['name' => 'delete test35']);


        // create roles and assign existing permissions
        $role1 = Role::create(['name' => 'test5role']);
        $role1->givePermissionTo('edit  test35');
        $role1->givePermissionTo('delete test35');


//        $role3 = Role::create(['name' => 'Super-Admin']);
        // gets all permissions via Gate::before rule; see AuthServiceProvider

        // create demo users
        $user = User::factory()->create([
            'name' => 'Example User',
            'email' => 'test5@example.com',

        ]);
        $user->assignRole($role1);


    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\DB;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Permission::create(['name'=> 'create-article']);
        Permission::create(['name'=> 'edit-article']);
        Permission::create(['name'=> 'see-all-articles']);
        Permission::create(['name'=> 'see-details-article']);
        Permission::create(['name'=> 'activate-article']);
        Permission::create(['name'=> 'delete-article']);

        Permission::create(['name'=> 'add-user']);
        Permission::create(['name'=> 'edit-user']);
        Permission::create(['name'=> 'details-user']);
        Permission::create(['name'=> 'delete-user']);

        Permission::create(['name'=> 'save-command']);
        Permission::create(['name'=> 'validate-command']);
        Permission::create(['name'=> 'modify-command']);
        Permission::create(['name'=> 'see-details-command']);
        Permission::create(['name'=> 'delete-command']);

        $adminRole = Role::create(['name'=>'Admin']);
        $sellerRole = Role::create(['name'=>'Seller']);
        $customerRole = Role::create(['name'=>'Customer']);
        $visitorRole = Role::create(['name'=> 'Visitor']);
        $superadminRole = Role::create(['name'=> 'Super-admin']);

        $adminRole->givePermissionTo([
            'add-user',
            'edit-user',
            'details-user',
            'delete-user',
            'see-all-articles',
            'see-details-article',
        ]);

        $sellerRole->givePermissionTo([
            'create-article',
            'edit-article',
            'see-all-articles',
            'activate-article',
            'see-details-article',
            'delete-article',
            'see-details-command'
        ]);

        $customerRole->givePermissionTo([
            'see-all-articles',
            'see-details-article',
            'save-command',
            'validate-command',
            'see-details-command',
            'modify-command',
            'delete-command',
        ]);

        $visitorRole->givePermissionTo([
            'see-all-articles',
            'see-details-article',
        ]);
        
        $superadminRole->givePermissionTo([
            'add-user',
            'edit-user',
            'details-user',
            'delete-user',
            'see-all-articles',
            'see-details-article',
            'create-article',
            'edit-article',
            'activate-article',
            'delete-article',
            'see-details-command',
            'save-command',
            'validate-command',
            'modify-command',
            'delete-command',
        ]);

        $user = DB::table('users')->first();
        dd($user);
        $user->assignRole('Admin');

    }
}

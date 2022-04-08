<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Creates the admin role
        $role_admin = new Role();
        $role_admin->name = 'admin';
        $role_admin->description = 'An adminastrator user';
        $role_admin->save();

        //Creates the user role
        $role_user = new Role();
        $role_user->name = 'user';
        $role_user->description = 'An ordinary user';
        $role_user->save();



    }
}

<?php

use Illuminate\Database\Seeder;
use App\Role;

class RoleSeeder extends Seeder{

    public function run(){
        \DB::table('roles')->delete();

        Role::create([
            'name'   => 'blogger'
        ]);

        Role::create([
            'name'   => 'uploads'
        ]);

        Role::create([
            'name'   => 'admin'
        ]);

        Role::create([
            'name'   => 'subgroup'
        ]);

        Role::create([
            'name'   => 'excos'
        ]);

    }
}
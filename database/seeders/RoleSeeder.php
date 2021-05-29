<?php

namespace Database\Seeders;

use App\Models\Backend\Permission;
use App\Models\Backend\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $allPermissions= Permission::all();
        //Super Admin
        Role::updateOrCreate([
            'name'=>'Super Admin',
            'slug'=>'super-admin',
            'deletable'=>false,
        ])->permissions()->sync($allPermissions->pluck('id'));
        //User
        Role::updateOrCreate([
            'name'=>'User',
            'slug'=>'user',
            'deletable'=>false,
        ]);
    }
}

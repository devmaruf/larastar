<?php

namespace Database\Seeders;

use App\Models\Backend\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleId= Role::where('slug','super-admin')->first()->id;
        // User::Super Admin
        User::updateOrCreate([
            'role_id'=>$roleId,
            'name'=>'Super Admin',
            'email'=>'super@mail.com',
            'password'=>Hash::make('12345678'),
            'status'=>'Active',
            'deletable'=>false
        ]);
        // User::User
        $roleId= Role::where('slug','user')->first()->id;
        User::updateOrCreate([
            'role_id'=>$roleId,
            'name'=>'User',
            'email'=>'user@mail.com',
            'password'=>Hash::make('12345678'),
            'status'=>'Active',
            'deletable'=>false
        ]);
    }
}

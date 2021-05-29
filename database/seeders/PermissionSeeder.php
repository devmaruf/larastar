<?php

namespace Database\Seeders;

use App\Models\Backend\Module;
use App\Models\Backend\Permission;
use Illuminate\Database\Seeder;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $appModuleDashboard= Module::updateOrCreate(['name'=>'Dashboard Permission']);
        Permission::updateOrCreate([
            'module_id'=>$appModuleDashboard->id,
            'name'=>'Access Dashboard',
            'slug'=>'app.dashboard',
        ]);
        //Role Module & Permission
        $roleModule= Module::updateOrCreate(['name'=>'Role Permission']);
        Permission::updateOrCreate([
            'module_id'=>$appModuleDashboard->id,
            'name'=>'Role Create',
            'slug'=>'app.role.create',
        ]);
        Permission::updateOrCreate([
            'module_id'=>$appModuleDashboard->id,
            'name'=>'Role Update',
            'slug'=>'app.role.update',
        ]);
        Permission::updateOrCreate([
            'module_id'=>$appModuleDashboard->id,
            'name'=>'Role Delete',
            'slug'=>'app.role.delete',
        ]);

        //User Module & Permission

        $roleModule= Module::updateOrCreate(['name'=>'User Permission']);
        Permission::updateOrCreate([
            'module_id'=>$appModuleDashboard->id,
            'name'=>'User Create',
            'slug'=>'app.user.create',
        ]);
        Permission::updateOrCreate([
            'module_id'=>$appModuleDashboard->id,
            'name'=>'User Update',
            'slug'=>'app.user.update',
        ]);
        Permission::updateOrCreate([
            'module_id'=>$appModuleDashboard->id,
            'name'=>'User Delete',
            'slug'=>'app.user.delete',
        ]);
    }
}

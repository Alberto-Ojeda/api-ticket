<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class PermissionsRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //superadmin
        //admin
        //user


        $superadmin = Role::firstOrCreate(['name'=>'superadmin']);
        $admin = Role::firstOrCreate(['name'=>'admin']);
        $user= Role::firstOrCreate(['name'=>'user']);
//sync role, se utiliza para multiples permisos en un role
       permission:: firstOrCreate(["name"=>"show_dashboard"],['name'=>'show_dashboard'])->syncRoles($superadmin,$admin,$user);

       Permission::firstOrCreate(["name"=>"index_user"],['name'=>'index_user'])->syncRoles($superadmin,$admin);
       Permission::firstOrCreate(["name"=>"show_user"],['name'=>'show_user'])->syncRoles($superadmin,$admin);
       Permission::firstOrCreate(["name"=>"create_user"],['name'=>'create_user'])->syncRoles($superadmin);
       Permission::firstOrCreate(["name"=>"edit_user"],['name'=>'edit_user'])->syncRoles($superadmin);
       Permission::firstOrCreate(["name"=>"delete_user"],['name'=>'delete_user'])->syncRoles($superadmin);

       Permission::firstOrCreate(["name"=>"index_role"],['name'=>'index_role'])->syncRoles($superadmin,$admin);
       Permission::firstOrCreate(["name"=>"show_role"],['name'=>'show_role'])->syncRoles($superadmin,$admin);
       Permission::firstOrCreate(["name"=>"create_role"],['name'=>'create_role'])->syncRoles($superadmin);
       Permission::firstOrCreate(["name"=>"edit_role"],['name'=>'edit_role'])->syncRoles($superadmin);
       Permission::firstOrCreate(["name"=>"delete_role"],['name'=>'delete_role'])->syncRoles($superadmin);

       Permission::firstOrCreate(["name"=>"index_permission"],['name'=>'index_permission'])->syncRoles($superadmin,$admin);
       Permission::firstOrCreate(["name"=>"show_permission"],['name'=>'show_permission'])->syncRoles($superadmin,$admin);
       Permission::firstOrCreate(["name"=>"create_permission"],['name'=>'create_permission'])->syncRoles($superadmin);
       Permission::firstOrCreate(["name"=>"edit_permission"],['name'=>'edit_permission'])->syncRoles($superadmin);
       Permission::firstOrCreate(["name"=>"delete_permission"],['name'=>'delete_permission'])->syncRoles($superadmin);

    }
}

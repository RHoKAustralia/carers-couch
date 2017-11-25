<?php

use Illuminate\Database\Seeder;
use App\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        /* $role_employee = new Role();
        $role_employee->name = 'patient';
        $role_employee->description = 'A Patient'; 
        $role_employee->save(); */
        $role_employee = new Role();
        $role_employee->name = 'carer';
        $role_employee->description = 'A Carer';
        $role_employee->save();
        $role_manager = new Role();
        $role_manager->name = 'SME';
        $role_manager->description = 'a SME';
        $role_manager->save();

    }
}

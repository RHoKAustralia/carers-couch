<?php

use Illuminate\Database\Seeder;

use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        //$role_patient = Role::where('name', 'patient')->first();
        $role_carer = Role::where('name', 'carer')->first();
        $role_sme  = Role::where('name', 'SME')->first();

        /*$employee = new User();
        $employee->name = 'Patient';
        $employee->email = 'patient@carerscouch.com';
        $employee->password = bcrypt('Patient@123');
        $employee->save();
        $employee->roles()->attach($role_patient); */

        $manager = new User();
        $manager->name = 'Carer';
        $manager->email = 'carer1@carerscouch.com';
        $manager->password = bcrypt('Carer1@123');
        $manager->save();
        $manager->roles()->attach($role_carer);
        $manager = new User();
        $manager->name = 'Carer';
        $manager->email = 'carer2@carerscouch.com';
        $manager->password = bcrypt('Carer2@123');
        $manager->save();
        $manager->roles()->attach($role_carer);


        $manager = new User();
        $manager->name = 'SME';
        $manager->email = 'sme1@carerscouch.com';
        $manager->password = bcrypt('Sme1@123');
        $manager->save();
        $manager->roles()->attach($role_sme);

        $manager = new User();
        $manager->name = 'SME';
        $manager->email = 'sme2@carerscouch.com';
        $manager->password = bcrypt('Sme2@123');
        $manager->save();
        $manager->roles()->attach($role_sme);
    }
}

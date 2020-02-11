<?php

use App\Role;
use App\user;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class usersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        user::truncate();
        DB::table('role_user')->truncate();

       $admin = user::create([
            'name'=>'admin',
            'email'=>'doumamsamed@gmail.com',
            'password'=>Hash::make('password')
            ]);

            
       $utilisateur = user::create([
        'name'=>'user',
        'email'=>'user@gmail.com',
        'password'=>Hash::make('password')
        ]);
        

            $adminRole = Role::where('name','admin')->first();
            $userRole = Role::where('name','utilisateur')->first();

             $admin->roles()->attach($adminRole);
             $utilisateur->roles()->attach($userRole);

    }
}

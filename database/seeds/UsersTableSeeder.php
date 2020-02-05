<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()   
    {

        $usuarios = [
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'email_verified_at' => now(),
            'password' => 'admin', // password
            'remember_token' => Str::random(10),
        ];

        DB::table('users')->insert($usuarios);
        
        factory(App\Entities\User::class, 5)->create();
    }
}

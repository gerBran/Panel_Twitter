<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CrearUsuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
          'email' => 'admin@admin.com',
          'name' => 'Admin',
          'password'=> bcrypt('123456'),
          'remember_token' => str_random(60)
        ]);
    }
}

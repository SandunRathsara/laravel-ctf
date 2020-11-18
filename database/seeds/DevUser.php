<?php

use Illuminate\Database\Seeder;

class DevUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'developer',
            'email' => 'devops@gmail.com',
            'password' => Hash::make('r4ZdEQ9c3cnqxvKM'),
        ]);
    }
}

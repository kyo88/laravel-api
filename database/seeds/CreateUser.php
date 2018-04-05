<?php

use Illuminate\Database\Seeder;

class CreateUser extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'email' => 'test@g.c',
            'name' => 'Test',
            'password' => bcrypt('tremocoi'),
        ]);
    }
}

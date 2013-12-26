<?php

class UserTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'name'     => 'Administrator',
            'username' => 'root',
            'password' => Hash::make('admin')
        ]);
    }
}

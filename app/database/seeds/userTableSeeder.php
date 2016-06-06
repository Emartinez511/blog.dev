<<?php

class UserTableSeeder extends Seeder
{

    function run()
    {
        $user = new User();
        $user->email = 'emartinez511@gmail.com';
        $user->username = 'emartinez511';
        $user->password = $_ENV['USER_PASSWORD'];
        $user->save();
    }
}

<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Entities\User::truncate();
        factory(\App\Entities\User::class)->create(
            [
                'name' => 'Marcos',
                'email' => 'mrlsoares@gmail.com',
                'password' => bcrypt(123456),
                'remember_token' => str_random(10)
            ]
        );
        factory(\App\Entities\User::class)->create(
            [
                'name' => 'Luis Junior',
                'email' => 'juniorxr69@gmail.com',
                'password' => bcrypt('hellboy69'),
                'remember_token' => str_random(10)
            ]
        );
    }
}

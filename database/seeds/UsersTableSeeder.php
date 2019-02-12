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
       $user = App\User::create([
            'name' => 'Mohamed emad',
            'email' => 'moh@moh.com',
            'password' => bcrypt('123456'),
            'admin' => 1
        ]);

        App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/images.jpg',
            'about' => 'This is admin profile',
            'facebook' => 'facebook.com',
            'youtube' => 'youtube.com'
        ]);
    }
}

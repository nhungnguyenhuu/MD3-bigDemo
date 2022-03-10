<?php

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'user';
        $user->email = 'user@gmail.com';
        $user->password = Hash::make('123');
        $user->role_id= 1;
        $user->save();

        $user = new User();
        $user->name = 'nhung';
        $user->email = 'nhung@gmail.com';
        $user->password = Hash::make('123');
        $user->role_id= 2;
        $user->save();
    }
}

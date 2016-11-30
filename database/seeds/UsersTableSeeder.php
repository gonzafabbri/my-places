<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Request $request)
    {
        $user = User::create([
          'name' => $name,
          'lastname' => $lastname,
          'email' => $email,
          'username' => $username,
          'password' => Hash::make($password),
          'birth' => $birth,
          'avatar' => $avatar
        ]);
        $user->save();
    }
}

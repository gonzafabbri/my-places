<?php

use Illuminate\Database\Seeder;

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
          'name' => $request->name,
          'lastname' => $request->lastname,
          'email' => $request->email,
          'password' => $request->password,
          'birth' => $request->birth,
          'avatar' => $request->avatar
        ]);
    }
}

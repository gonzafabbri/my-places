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

       $user = new User([
         'name' => $request->name,
         'lastname' => $request->lastname,
         'email' => $request->email,
         'username'=>$request->username,
         'password' => $request->password,
         'birth' => $request->birth,
         'avatar' => $request->avatar
       ]);
       $user->save();
        $user = User::create([
          'name' => $name,
          'lastname' => $lastname,
          'email' => $email,
          'username' => $username,
          'password' => Hash::make($password),
          'birth' => $birth,
          'avatar' => $avatar
        ]);

    }
}

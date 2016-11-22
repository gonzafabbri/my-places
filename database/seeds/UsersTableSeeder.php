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
         'password' => $request->password,
         'birth' => $request->birth,
         'avatar' => $request->avatar
       ]);
       $user->save();
    }
}

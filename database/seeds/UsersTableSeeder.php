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
<<<<<<< HEAD
       $user = new User([
         'name' => $request->name,
         'lastname' => $request->lastname,
         'email' => $request->email,
         'password' => $request->password,
         'birth' => $request->birth,
         'avatar' => $request->avatar
       ]);
       $user->save();
=======
        $user = User::create([
          'name' => $request->name,
          'lastname' => $request->lastname,
          'email' => $request->email,
          'password' => $request->password,
          'birth' => $request->birth,
          'avatar' => $request->avatar
        ]);
>>>>>>> 48e1c8087a4d1de709937fc0f9478a7f834d99e2
    }
}

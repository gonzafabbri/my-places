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
          'name' => $name,
          'lastname' => $lastname,
          'email' => $email,
          'username' => $username,
          'password' => Hash::make($password),
          'birth' => $birth,
          'avatar' => $avatar
        ]);
<<<<<<< HEAD
        $user->save();
=======
>>>>>>> 48e1c8087a4d1de709937fc0f9478a7f834d99e2
>>>>>>> f0e561cef766f881db9eef561138371d49b35272
    }
}

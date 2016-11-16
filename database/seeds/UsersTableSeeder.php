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
        $user = new User([
          'name' => $request->name,
          'lastname' => $request->lastname,
        ])
    }
}

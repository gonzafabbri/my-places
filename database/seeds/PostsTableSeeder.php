<?php

use Illuminate\Database\Seeder;

class PostsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $post = new Post([
          'titulo' => $request->titulo,
          'contenido' => $request->contenido,
          'user_id' => $request->user_id
        ]);
        $post->save();
    }
}

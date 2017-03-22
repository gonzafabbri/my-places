<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
class PublicController extends Controller
{
  public function index(Request $request, $id) {
    // $user_id = $request->input("user_id");
    //En la vista principal muestro los 10 mejores posts a todos los usuarios!
    $posts = Post::join('users', 'posts.user_id', '=', 'users.id')
    ->get();

    // $users = User:: join('posts', 'users.id', '=', 'posts.user_id')
    // ->get();
  // dd($posts);


    return view('panel.public')
          ->with('posts', $posts);
          // ->with('users', $users);
  }

  /**
   * Muestra una vista con información del proyecto
   */
//   public function showInfo() {
//     return view('public.info');
//   }
 }

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function displayPosts() {

    	//En la vista no está mal utilizar directamente Auth::user() para mostrar data del usuario, pero para dar información relacionada al usuario (como los posts) debemos irla a buscar en el controlador (o en un repositorio) y pasarsela a la vista

    	//Si quisiera pasarle a la vista los posts paginados seria:
    	// Auth::user()->posts()->paginate(3) <- con los parentesis despues de posts
    	$posts = Auth::user()->posts;

    	return view('panel.posts')->with('posts', $posts);
    }

    public function displayProfile() {
    	return view('panel.profile')->with('profile', Auth::user());
    }
}

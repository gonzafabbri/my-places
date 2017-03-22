<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\User;
use Auth;

class ProfileController extends Controller
{
    protected function edit($id){
      return view('admin.posts-edit', ["id" => $id]);
    }
    protected function update(Request $request, $id)
    {
      $users = Auth::user();
      $posts = Post::All();
      $post = Post::find($id);

      //Actualizar la info
      $post->fill([
			'contenido'	=> $request->contenido,
		]);

      $post->save();

      //Redirigir adonde quieran
      // return view('panel.perfil')
      // ->with('users', $users)
      // ->with('posts', $posts);
      return redirect ('/perfil');

    }

    protected function removePostIfExists($id){
      $users = Auth::user();
      $posts = Post::All();

      $post = Post::find($id);
      $post->delete();

      // return view('panel.perfil')
      // ->with('users', $users)
      // ->with('posts', $posts);

      return redirect('/perfil');

    }

    //
    function indexUser()
    {
      $users = Auth::user();

      $posts = Post::join('users', 'post.user_id', '=', 'users.id')
      ->get(Auth::user());
      dd($posts);
      return view('panel.perfil')
      ->with('users', $users)
      ->with('posts', $posts);

    }
    // function indexPosts()
    // {
    //
    //   $posts = Post::join
    //   return view('panel.perfil')
    //   ->with('users', $users)
    //   ->with('posts', $posts);
    // }
    protected function createPost(array $data)
    {
        return Post::create([
            'contenido' => $data['contenido']
        ]);
    }

    public function storePost(Request $request)
  {  $this->validate($request, [
    'contenido' => 'required|max:150',
  ]);

     $post = Auth::user()->posts()->create([
      'contenido'  => $request->contenido,
      'user_id'    => Auth::id()
    ]);
    $users = Auth::user();
    $posts = Post::All();
    return view('panel.perfil')
    ->with('users', $users)
    ->with('posts', $posts);
      // $post = new Post;
      // $post->create($request->all());
      // $post->save();
      // $id = Auth::user()->id;
      // $id
  }
    protected function storeAvatar($request) {
    	$user = $request->Auth::user(); //El usuario de la request es el usuario autenticado. Podria obtenerlo también con Auth::user()

		/**
		 * Si cargaron una imagen en el formulario la subo
		 */
    	if($request->hasFile('avatar')) {
    		/**
    		 * En caso de que el usuario ya tuviera un avatar viejo,
    		 * lo borro ya que no lo necesito más
    		 */
    		$this->removeAvatarIfExists($user);
    		/**
    		 *
    		 * En lugar de utilizar el método store, utilizo el método
    		 * storePublicly para que la almacena en la carpeta
    		 * storage/app/public, que es donde tenemos que guardar todas los
    		 * archivos que se suban mediante un formulario que necesitemos
    		 * que sean accesibles publicamente, por ejemplo, desde el navegador.
    		 *
    		 * Para que puedan ser accedidos publicamente tengo que acordarme
    		 * de crear el link simbolico en la carpeta public
    		 *
    		 * Para eso tengo ejecutar en el root del proyecto:
    		 * php artisan storage:link
    		 *
    		 * El cual crea un link simbolico en public/storage, apuntando a la
    		 * carpeta storage/app/public
    		 *
    		 * https://laravel.com/docs/5.3/filesystem#the-public-disk
    		 *
    		 * El segundo parámetro que le paso al método store es el disco en
    		 * el que lo quiero guardar, esto me permitiria por ejemplo guardarlo
    		 * en un servidor externo simplemente cambiando este parámetro
    		 *
    		 * https://laravel.com/docs/5.3/filesystem
    		 *
    		 */

    		/**
    		 * Genero un nuevo nombre ya que si dos imágenes tienen el mismo
    		 * contenido, les pone el mismo nombre por defecto, lo cual si no lo
    		 * manejo cuidadosamente podria ser un problema, no es raro que dos
    		 * usuarios suban la misma imagen si uno la borrara, les desapareceria
    		 * a ambos.
    		 */

    		$newFilename = uniqid().".".$request->avatar->extension();

    		/**
    		 * Defino la carpeta en la que voy a guardar los avatares
    		 */
    		$folder = "avatars";

    		/**
    		 * Almaceno la imagen en el servidor con el nuevo nombre
    		 */
    		$path = $request->avatar->storeAs($folder, $newFilename, 'public');

    		/**
    		 * Guardo el path de la imagen en el usuario
    		 */
    		$user->avatar = $folder."/".$newFilename;
    	}
    }
}

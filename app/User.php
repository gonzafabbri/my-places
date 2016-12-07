<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;





class User extends Model implements AuthenticatableContract
{
  use Authenticatable;
  protected $fillable = [
      'name', 'lastname', 'email', 'username', 'password', 'birth', 'avatar'  //Agrego los campos photo y lastname!
  ];
  // protected $table = 'users';

  /**
   * The attributes that should be hidden for arrays.
   *
   * @var array
   */
  protected $hidden = [
      'password', 'remember_token', 'api_token' //Agrego la ocultación del api_token
  ];

  /**
   * Defino la relacion entre un usuario y sus posts
   *
   * En este caso le digo que un usuario puede tener muchos posts, notar que no tengo que
   * especificar las claves foraneas que se utilizan en la base de datos porque al crear
   * las tablas users y posts segui las convenciones, tanto en los nombres de tablas como en
   * los nombres de las claves foraneas!
   */
  public function posts() {
      return $this->hasMany('App\Post');
  }
}

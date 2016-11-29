@include('layouts.navbar_otros')
<div class="posts">
  <form class="" action="index.html" method="post">
    <input type="text" name="content" value="">
    <input type="file" name="photo" value="">
    <button type="submit" name="button">Enviar post</button>
  </form>
</div>
<div class="perfil">
  <img src="" alt="" />
  <h1>{{User->name}}</h1>
  <h1>{{User->lastname}}</h1>
  <h1>{{User->username}}</h1>
  <div class="cantidad_posts">
    {{Posts->count()}}
  </div>
</div>
<div class="mostrar_posts">
  @if(Posts->count()>0)
    @foreach($posts as $post)

      <div class="">
        {{$post->content}}
      </div>
      <a href="#">Borrar Post</a>
    @endforeach
  @else
    <div class="post">
      <h3>No has posteado nada aún</h3>
    </div>
  @endif
</div>

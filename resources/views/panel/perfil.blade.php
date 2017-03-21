@include('layouts.app')

<div class="container-fluid">
  <div class="row">
    <div class="perfil" style="color:white; border:3px white solid; width:50%; margin-left:25%">
      <div class="nombre-usuario" style="color:white; border:2px white solid; text-align:center">
        <h1>{{$users->username}}</h1>
        </div>
        <div class="cantidad_posts" style="border:3px white solid; color:white; text-align:center; font-size:25px ">
          Cantidad de posts:  {{$posts->count()}}
        </div>
      <div class="avatar" style="border:2px white solid; text-align:center; padding:20px">
        <img src="avatars/{{$users->avatar}}" style="width:100px;height:100px "  />
      </div>


    </div>
    <br><br>
  </div>
  <div class="row">
    <div class="posts" style="width:50%; margin-left:25%; color:white; border:3px grey solid; border-radius:5px">
      <form class="" role="form" action="{{url('/perfil')}}" method="POST">
        {{ csrf_field() }}
        <div class="form-group{{ $errors->has('contenido') ? ' has-error' : '' }}">
        <input type="text" class="form-control" placeholder="Creá tu post" name="contenido">
        @if ($errors->has('contenido'))
            <span class="help-block">
                <strong>{{ $errors->first('contenido') }}</strong>
            </span>
        @endif
        {{-- O publicá una foto!
        <input type="file" name="photo" value="">
        <button type="submit" class="btn btn-primary"> --}}
            Enviar Post
        </button>
      </form>
    </div>

  </div>
  <br><br>
  <div class="titulo" style="color:white; text-align:center; font-size:50px">
    Mis posts!
  </div>
  <div class="row">
    <div class="mostrar_posts" style="color:white">
      @if(count($posts) != 0)
        @foreach($posts as $post)

          <div class="each-post" style="border:3px white solid; width:50%; margin-left:25%; background-color:#FF5C57; font-size:20px">
            <img src="avatars/{{$users->avatar}}" style="width:50px;height:50px ">
            {{$users->username}}
            <br>
            {{$post->contenido}}
            <br><a href="borrarpost/{{ $post->id }}" style="border:2px black solid; color:white; background-color: grey">Eliminar post</a>
            <a href="editpost/{{ $post->id }}" style="border:2px black solid; color:white; background-color: grey">Editar post</a>
          </div>

        @endforeach
      @else
        <div class="post" style="color:white; text-align:center">
          <h3>No has posteado nada aún!</h3>
        </div>
      @endif
    </div>
  </div>
</div>





@include('layouts.footer')

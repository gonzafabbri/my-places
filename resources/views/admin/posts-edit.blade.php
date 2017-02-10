@include('layouts.app')

  <div class="row">
    <div class="posts" style="width:50%; margin-left:25%; color:white; border:3px grey solid; border-radius:5px">
      <form class="" role="form" action="/editpost/{{$id}}" method="POST">
        {{ csrf_field() }}
        {{-- {!! Form::model(['route' => ['admin.posts-update', $post], 'method'=>'PUT']) !!} --}}
        <input type="text" class="form-control" placeholder="Editá tu post" name="contenido">
        O publicá una foto!
        <input type="file" name="photo" value="">
        <button type="submit" class="btn btn-primary">
            Enviar Post
        </button>
      </form>
    </div>

  </div>
@include('layouts.footer')

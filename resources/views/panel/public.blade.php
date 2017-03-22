@include('layouts.app')

<div class="row">
  <div class="mostrar_posts" style="color:white">
    @if(count($posts) != 0)
      @foreach($posts as $post)

        <div class="each-post" style="border:3px white solid; width:50%; margin-left:25%; background-color:#FF5C57; font-size:20px">
          <img src="@php echo asset('storage')@endphp/avatars/{{$post->avatar}}" style="width:50px;height:50px ">
          {{$post->username}}
          <br>
          {{$post->contenido}}
          <br>
        </div>

      @endforeach
    @else
      <div class="post" style="color:white; text-align:center">
        <h3>No hay posts aún!</h3>
      </div>
    @endif
  </div>
</div>

  @include('layouts.footer')

@extends('../base')

@section('title', 'Activites')
@section('navigationpage')
<ul class="navbar-nav mr-auto">
  <li class="nav-item ">
      <a class="nav-link" href="/">Home<span class="sr-only"></span></a>
  </li>
  <li class="nav-item active">
      <a class="nav-link" href="{{ route('activites.show') }}">Activités</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('culture') }}">À propos</a>
</li>
</ul>
@endsection
@section('content')

<div>
    
</div>
<div class="container">
    <div class="liste-act">
        
        @forelse ($posts as $post)
        <div class="activite shadow mb-5 bg-dark ">
            <div class="photo-activite">
                {{-- <img src="{{asset('images/img1.jpg')}}" alt=""> --}}
                <img src="{{url('/images/' . basename($post->photo))}}" alt="">
            </div>
            <div class="infos-activite">
                <h4>{{$post->titre}}</h4>
                <p>{{$post->description}}</p>
                <a href="{{ route('post.show', ['id' => $post->id]) }}"><button type="button"  class="btn-activite">Info</button></a>
            </div>
        </div>
    @empty
    <div class="d-flex justify-content-center align-items-center" style="height: 200px;">
        Des evenements prochainement</div>
          @endforelse
    
        
    </div>
</div>
@endsection


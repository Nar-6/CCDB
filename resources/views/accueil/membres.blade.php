@extends('../base')

@section('title', 'Membres')
@section('navigationpage')
<ul class="navbar-nav mr-auto">
  <li class="nav-item ">
      <a class="nav-link" href="/">Home<span class="sr-only"></span></a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="{{ route('activites.show') }}">Activités</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="{{ route('culture') }}">À propos</a>
</li>
</ul>
@endsection
@section('content')

<div>
    <div class="container">
        <div class="membres">
        
            @foreach ($membres as $membre)
                <div class="membre">
                    <div class="photo-membre-container">
                    <div class="photo-membre  shadow">
                        <img src="{{ url('/images/' . basename($membre->photo))}}" alt="">
                    </div>
                    </div>
                    <div class="nom-membre">
                    <h4>{{$membre->nom}} {{$membre->prenom}}</h4>
                    </div>
                    <div class="role-membre">
                    <h3>{{$membre->role}}</h3>
                    </div>
                </div>
            @endforeach      
      
        </div>
      </div>
    </div>

@endsection


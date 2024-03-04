@extends('../base')

@section('title', 'Accueil')
@section('navigationpage')
<ul class="navbar-nav mr-auto">
  <li class="nav-item active">
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
@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
@if(session('info'))
    <div class="alert alert-info">
        {{ session('info') }}
    </div>
@endif
@section('content')


<div class="tetedepage">
  <div class="paragraphe-telephone">
    <h1>BIENVENUE</h1>
    <p>Le CCDB est une association des ressortissants de la commune de Bassila du monde entier. <br> <br>
       Parcourez notre site web pour tout connaitre de cette communauté.</p>
  </div>
<div class="photo-et-diapo">
  
  <div class="photo-telephone">
    <img src="{{ asset('images/ccdb5.png')}}" alt="">
  </div>
  @php
  $imagesDisponibles = range(4, 24); // Créer un tableau avec les numéros d'images disponibles
  $i = array_rand($imagesDisponibles); // Sélectionner une image aléatoire
  $imageI = $imagesDisponibles[$i]; // Récupérer la valeur de l'image sélectionnée
  unset($imagesDisponibles[$i]); // Retirer l'image sélectionnée des images disponibles

  $j = array_rand($imagesDisponibles); // Sélectionner une autre image aléatoire parmi les restantes
  $imageJ = $imagesDisponibles[$j]; // Récupérer la valeur de l'image sélectionnée
  unset($imagesDisponibles[$j]); // Retirer l'image sélectionnée des images disponibles

  $k = array_rand($imagesDisponibles); // Sélectionner une autre image aléatoire parmi les restantes
  $imageK = $imagesDisponibles[$k]; // Récupérer la valeur de l'image sélectionnée
  unset($imagesDisponibles[$k]); // Retirer l'image sélectionnée des images disponibles

  $l = array_rand($imagesDisponibles); // Sélectionner une autre image aléatoire parmi les restantes
  $imageL = $imagesDisponibles[$l]; // Récupérer la valeur de l'image sélectionnée
  unset($imagesDisponibles[$l]); // Retirer l'image sélectionnée des images disponibles

  $m = array_rand($imagesDisponibles); // Sélectionner une autre image aléatoire parmi les restantes
  $imageM = $imagesDisponibles[$m]; // Récupérer la valeur de l'image sélectionnée
  unset($imagesDisponibles[$m]); // Retirer l'image sélectionnée des images disponibles

  $n = array_rand($imagesDisponibles); // Sélectionner une autre image aléatoire parmi les restantes
  $imageN = $imagesDisponibles[$n]; // Récupérer la valeur de l'image sélectionnée
  unset($imagesDisponibles[$n]); // Retirer l'image sélectionnée des images disponibles

  $o = array_rand($imagesDisponibles); // Sélectionner une autre image aléatoire parmi les restantes
  $imageO = $imagesDisponibles[$o]; // Récupérer la valeur de l'image sélectionnée
  unset($imagesDisponibles[$o]); // Retirer l'image sélectionnée des images disponibles

  $p = array_rand($imagesDisponibles); // Sélectionner une autre image aléatoire parmi les restantes
  $imageP = $imagesDisponibles[$p]; // Récupérer la valeur de l'image sélectionnée
@endphp
<div id="row" class="row ">
    
    <div id="carouselExampleIndicators" class="carousel slide"  data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      </ol>
      <div class="carousel-inner shadow">
        <div class="carousel-item active" >
          <img class="d-block w-100" src="{{asset('images/img'.$imageI.'.jpg')}}" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
              <h1>Bienvenue</h1>
              <p>Le CCDB est une association des ressortissants de la commune de Bassila du monde entier.</p>
            </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('images/img'.$imageJ.'.jpg')}}" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
              <h1>Activités</h1>
              <p>Nous nous sommes donner pour mission d'unifier la communauté bassiloise à travers le monde.
                Cela passe par la promotion de la culture bassiloise et les différentes activités menées dans ce but.</p>
            </div>
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="{{asset('images/img'.$imageK.'.jpg')}}" alt="First slide">
          <div class="carousel-caption d-none d-md-block">
              <h1>Culture Bassiloise</h1>
              <p>Religion, Habitudes, Mode de vie. Parcourez notre site web pour tout connaitre de cette communauté.</p>
            </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

  </div>
</div>

</div>

<div id="container" class="container">
    <div class="droit shadow">
        <div class="image-titre">
            {{-- <img class="d-block w-100" src="{{asset('images/img3.jpg')}}" alt="Third slide"> --}}
            <div class="titre-droit">
                <h3>Présentation</h3> <br> <br>
                <p>Qu'est ce que le CCDB ?</p>
            </div>
        </div>
    </div>
    <div class="gauche">
        <p class="descrip">
           Le Conseil Culturel de la Daspora Bassiloise (CCDB) est une association qui a été fondé le 1er Octobre 2020.
           Notre objectif principal est de favoriser le rassemblement, l'union et la solidarité entre les ressortissants
           de l'arrondissement de Bassila.
        </p>
    </div>
</div>


<div id="piste" class="piste">
  <div class="liste-photo">
      <div class="photo">
        <img src="{{ asset('images/img'.$imageL.'.jpg')}}" alt="">
      </div>
      <div class="photo">
        <img src="{{ asset('images/img'.$imageM.'.jpg')}}" alt="">
      </div>
      <div class="photo">
        <img src="{{ asset('images/img'.$imageN.'.jpg')}}" alt="">
      </div>
      <div class="photo">
        <img src="{{ asset('images/img'.$imageO.'.jpg')}}" alt="">
      </div>
      <div class="photo">
        <img src="{{ asset('images/img'.$imageP.'.jpg')}}" alt="">
      </div>
  </div>
</div>

@if ($lastPost)
<div class="container" id="container2">

  <h2>Notre dernier évènement :  <br> <br> <span>{{$lastPost->titre}}</span></h2>

  <div class="nos-activites">
    
    <div class="diapo-act">
      <img class="shadow" src="{{url('/images/' . basename($lastPost->photo))}}" alt="">
    </div>
    <div class="para-act">
      <p>{{$lastPost->deroulement}} </p>
    </div>

  </div>

  <div class="autres-activites">
    <p><a href="{{ route('activites.show') }}">Voir toutes les activités</a></p>
  </div>

</div>
@else
<div class="d-flex justify-content-center align-items-center" style="height: 200px;">
  Des evenements prochainement</div>
@endif

@if ($membreAleatoire)
<div class="container">
  <div class="membres">

    <div class="membre">
      <div class="photo-membre-container">
        <div class="photo-membre  shadow">
          <img src="{{ url('/images/' . basename($membreAleatoire->photo))}}" alt="">
        </div>
      </div>
      <div class="nom-membre">
        <h4>{{$membreAleatoire->nom}} {{$membreAleatoire->prenom}}</h4>
      </div>
      <div class="role-membre">
        <h3>{{$membreAleatoire->role}}</h3>
      </div>
    </div>

    <div class="autres-activites autres-membres">
      <p><a href="{{ route('membres') }}">Voir tous les membres</a></p>
    </div>

  </div>
</div>
@endif

  <div class="conclusion">

    <div class="conclusion-liens">

      <div class="sabonner">
          <a href="{{ route('culture') }}#sabonner"><button id="btn-abonnement" class="btn btn-abonnement">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell" viewBox="0 0 16 16">
              <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2M8 1.918l-.797.161A4 4 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4 4 0 0 0-3.203-3.92zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5 5 0 0 1 13 6c0 .88.32 4.2 1.22 6"/>
            </svg>
          </button></a>
          <p>Pour ne rien rater de nos prochaines activités.</p>
      </div>
    <div class="barre-transparent" id="btrans"></div>

      <div class="ecrirenous">
          <a href="{{ route('culture') }}#ecrirenous"><button id="btn-abonnement" class="btn btn-abonnement">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
              <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001m-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708z"/>
            </svg>
          </button></a>
          <p>Contactez nous !</p>
      </div>
    <div class="barre-transparent" id="btrans"></div>
      <div class="donnerdon">
          <a href="https://www.paypal.com/donate/?hosted_button_id=WBKFYJG33DHUY"><button id="btn-abonnement" class="btn btn-abonnement">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-stack" viewBox="0 0 16 16">
              <path d="M1 3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm7 8a2 2 0 1 0 0-4 2 2 0 0 0 0 4"/>
              <path d="M0 5a1 1 0 0 1 1-1h14a1 1 0 0 1 1 1v8a1 1 0 0 1-1 1H1a1 1 0 0 1-1-1zm3 0a2 2 0 0 1-2 2v4a2 2 0 0 1 2 2h10a2 2 0 0 1 2-2V7a2 2 0 0 1-2-2z"/>
            </svg>
          </button></a>
          <p>Participer à l'essor de notre communauté ici.</p>
      </div>

    </div>

  </div>
{{-- <div class="container" id="abonnement-form">
  @include('../partials/abonnement_form')
</div> --}}
@endsection


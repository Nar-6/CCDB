@extends('../base')

@section('title', 'Post')
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


<div class="post-single">
    <div class="single-photo">
        <div class="single-photo-container">
            <img id="single-photo-container-img" class="shadow" src="{{url('/images/' . basename($post->photo))}}" alt="">
            <div class="single-boutons">
                <!-- Button trigger modal -->
                <button type="button" id="modal-photo-bouton" class="btn " data-toggle="modal" data-target="#modal-photo">
                    Photos
                </button>
                <button type="button" id="modal-video-bouton" class="btn " data-toggle="modal" data-target="#modal-video">
                    Vidéos
                </button>
                
                
            </div>
        </div>
    </div>
    <div class="contenu-single">
        <div class="contenu-post">
            <h2>{{$post->titre}}</h2><br>
            <p class="description">{{$post->description}}</p> <br>
            <p class="deroulement">{{$post->deroulement}}</p> <br>
            <div class="info-post">
                <div class="temps">
                   @php
                        $temps = now()->diffInSeconds($post->created_at);
                        if ($temps > 60) {
                            $temps = now()->diffInMinutes($post->created_at);
                            if ($temps > 60) {
                                $temps = now()->diffInHours($post->created_at);
                                if ($temps > 24) {
                                    $temps = now()->diffInDays($post->created_at);
                                    if ($temps > 7) {
                                    $temps =ceil($temps / 7);
                                        if ($temps > 4) {
                                            $temps = now()->diffInDays($post->created_at);
                                            $temps =ceil($temps / 30.44);
                                            if ($temps > 12) {
                                                $temps = now()->diffInDays($post->created_at);
                                                $temps =ceil($temps / 365.25);   
                                                echo $temps.' ans';
                                            } else {
                                                echo $temps.' m';
                                            }
                                        } else {
                                            echo $temps.' w';
                                        }
                                    }else {
                                        echo $temps.' j';
                                    }   
                                }else {
                                    echo $temps.' h';
                                }
                            }else {
                                 echo $temps.' min';
                            }
                        } else {
                            echo $temps.' s';
                        }
                    @endphp
                </div>
                <div class="nbr-com">
                    @php
                        $nbrcom = $comments->count();
                        echo $nbrcom.' commentaires';
                    @endphp
                </div>
            </div>
        </div> <br>
        <div class="commentaires">
            <div class="ecrire-commentaire">
                {{-- <h3>Ajouter un commentaire</h3> --}}
                <div class="barre-container">
                    <div class="barre-transparent"></div>
                </div> <br>
                <form id="commentForm" action="{{ route('comment.store') }}" method="post">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $post->id }}">
                    <div class="form-group">
                        <label for="comment">Votre commentaire :</label>
                        <div>
                            <textarea name="comment" id="comment" class="form-control" rows="1" required></textarea>
                            {{-- <input type="text" name="comment" id="comment" class="form-control"> --}}
                            <button type="submit" class="btn " id="form-btn">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" id="form-svg" class="bi bi-send" viewBox="0 0 16 16">
                                    <path d="M15.854.146a.5.5 0 0 1 .11.54l-5.819 14.547a.75.75 0 0 1-1.329.124l-3.178-4.995L.643 7.184a.75.75 0 0 1 .124-1.33L15.314.037a.5.5 0 0 1 .54.11ZM6.636 10.07l2.761 4.338L14.13 2.576zm6.787-8.201L1.591 6.602l4.339 2.76z"/>
                                </svg>
                            </button>
                        </div>
                    </div>
                    
                </form>
            </div>
            <div id="commentSection" class="commentaires-liste">
                
               @include('../partials/comment_list')
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="modal-photo" tabindex="-1" role="dialog" aria-labelledby="modal-photoTitle" aria-hidden="true" style="">
    <div class="modal-dialog" id="modal-dialog" role="document">
        <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-content" id="modal-content">
           
                
                       
                        @if(count($images) > 0)
                            
                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                              
                              @foreach($images as $key => $image)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                  <img src="{{ $image }}" class="d-block w-100" alt="Slide {{ $key + 1 }}">
                                </div>
                              @endforeach
                            </div>
                            <a id="eh" class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
                                  </svg>                              <span class="sr-only">Previous</span>
                            </a>
                            <a id="ah" class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
                                  </svg>                              <span class="sr-only">Next</span>
                            </a>
                          </div>

                        @else
                            <p style="color: white">Aucune image disponible</p>
                        @endif
                    
                
                <style>
                    /* Style facultatif pour personnaliser l'apparence du carrousel */
                    #eh, #ah{
                       
                        
                    }
                    #eh svg, #ah svg{
                        color: rgba(0, 0, 0);
                        font-weight: bolder;
                       border: 0;
                       width: 100%;
                    }
                    #eh svg:hover, #ah svg:hover{
                        color: #92f2c4;
                    }
                    .carousel-item img {
                      width: 100%;
                      height: max-content;
                      object-position: center;
                      object-fit: contain; /* Pour couvrir toute la zone */
                    }
                    #modal-dialog{
                        position: absolute;
                        top: 50%;
                        left: 50%;
                        transform: translate(-50%, -50%);
                        flex-direction: column-reverse;
                        justify-content: center;
                        align-items: center;
                        text-align: center;
                    }
                    .carousel-item{
                        height: fit-content;
                        max-height: 80vh
                       width: 50vw;
                       object-position: center;
                      object-fit: contain;

                    }
                    #close{
                        color: white;
                        margin-left:50%;
                        margin-right: 50%;
                    }
                    .carousel-item::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0); /* Couleur de fond semi-transparente */
}
                    </style>
        </div>
    </div>
</div>
<div class="modal fade" id="modal-video" tabindex="-1" role="dialog" aria-labelledby="modal-videoTitle" aria-hidden="true">
    <div class="modal-dialog" id="modal-dialog" role="document">
        <button type="button" id="close" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        <div class="modal-content" id="modal-content">
           
                
                       
                        @if(count($videos) > 0)
                            
                        <div id="carouselExampleControls" class="carousel slide" data-interval="false">
                            <div class="carousel-inner">
                              
                              @foreach($videos as $key => $video)
                                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                                    <video class="d-block w-100" controls>
                                        <source src="{{ $video }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                </div>
                              @endforeach
                            </div>
                            <a id="ehv" class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-left" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11.354 1.646a.5.5 0 0 1 0 .708L5.707 8l5.647 5.646a.5.5 0 0 1-.708.708l-6-6a.5.5 0 0 1 0-.708l6-6a.5.5 0 0 1 .708 0"/>
                                  </svg>                              <span class="sr-only">Previous</span>
                            </a>
                            <a id="ahv" class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-chevron-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M4.646 1.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 0 .708l-6 6a.5.5 0 0 1-.708-.708L10.293 8 4.646 2.354a.5.5 0 0 1 0-.708"/>
                                  </svg>                              <span class="sr-only">Next</span>
                            </a>
                          </div>

                        @else
                            <p style="color: white">Aucune vidéo disponible</p>
                        @endif
                    
                
                <style>
                    /* Style facultatif pour personnaliser l'apparence du carrousel */
                    #eh, #ah{
                       
                        height:100%;
                    }
                    #ehv, #ahv{
                       
                       height: fit-content;
                       top: 50%
                   }
                    #eh svg, #ah svg{
                        color: rgba(0, 0, 0);
                        font-weight: bolder;
                       border: 0;
                       width: 100%;
                    }
                    #eh svg:hover, #ah svg:hover{
                        color: #92f2c4;
                    }
                    .carousel-item img {
                      width: 100%;
                      height: max-content;
                      object-position: center;
                      object-fit: contain; /* Pour couvrir toute la zone */
                    }
                    .carousel-item video {
                      width: 100%;
                      height: max-content;
                      object-position: center;
                      object-fit: contain; /* Pour couvrir toute la zone */
                    }
                    .carousel-item{
                        height: fit-content;
                        max-height: 80vh
                       width: 50vw;
                       object-position: center;
                      object-fit: contain;

                    }
                    .carousel-item::before {
  content: "";
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(0, 0, 0, 0); /* Couleur de fond semi-transparente */
}
                    </style>
        </div>
    </div>

</div>
{{-- <form id="myForm">
    @csrf --}}
    <!-- Vos champs de formulaire ici -->
    {{-- <input type="hidden" id="current-i" value="{{ $i }}"> --}}


<!-- Ajoutez le script jQuery et AJAX ici -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script>
    $(document).ready(function () {
        $('#commentForm').submit(function (e) {
            e.preventDefault();

            $.ajax({
                type: 'POST',
                url: '{{ route('comment.store') }}',
                data: $(this).serialize(),
                success: function (data) {
                    if (data.success) {
                        // Mettre à jour la section des commentaires avec la vue partielle
                        $('#commentSection').html(data.comment_list);

                        // Effacer le champ de commentaire
                        $('#comment').val('');
                    }
                }
            });
        });
    });
</script>

@endsection

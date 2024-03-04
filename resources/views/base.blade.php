<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="icon" href="{{ asset('images/CCDB2.png')}}" type="image/x-icon">

    <title>@yield('title') - CCDB</title>
    <!-- Ajoutez ici vos liens vers des feuilles de style CSS -->
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <!-- Vous pouvez ajouter d'autres éléments meta, liens CSS, scripts JS, etc., selon vos besoins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <!-- Inclure Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <!-- Inclure Bootstrap JS et jQuery -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5+z8vwOrZ+8hAW0fsJXg2FPt/nyPJ4o7E8rI5qF5" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js" integrity="sha384-pzjw8f+cyzE0R8BjE3r/dD7ffHcOZvVa8KGvbbsvihZv6S+rF4O47l5yWp6I5ZxX" crossorigin="anonymous"></script>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.3/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <script src="https://cdn.kkiapay.me/k.js"></script>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">    <!-- CSS Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    {{-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&callback=initMap" async defer></script> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- Scripts Bootstrap (facultatif pour les fonctionnalités JavaScript) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  
    
</head>
<body>
    <header>
        <!-- Insérez ici le contenu de votre en-tête -->
        <div class="titre-nav bg-dark"  > 
            <h5>Conseil Culturel de la Diaspora Bassiloise</h5>
        </div>
      
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand" href="/"><img src="{{ asset('images/CCDB2.png')}}" width="50" height="50" alt=""></a>
            <button class="navbar-toggler" id="navbar-toggler-button" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTextt">
                @yield('navigationpage')
                
                
                    <a id="btn-abonnement" href="https://www.paypal.com/donate/?hosted_button_id=WBKFYJG33DHUY" class="btn">Faire un don</a>
                
                
            </div>
        </nav>
    </header>

    <main>
        <!-- Contenu spécifique à chaque page -->
        <div class="containerr">
            @yield('content')
        </div>
    </main>

    <footer class="  py-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5>Informations de contact</h5>
                    <p>Adresse : 77700 magny le hongre chez mme Adamou</p>
                    <p>Email : <a class="email-footer"  href="mailto:ccdbassila@gmail.com">ccdbassila@gmail.com</a></p>
                    <p>Téléphone : <a class="tel-footer"  href="tel:+33652849181">+33652849181</a></p>
                    <p>Facebook : <a class="tel-footer" href="https://www.facebook.com/AFFOTABA77/">Conseil Culturel Diaspora Bassiloise</a></p>

                </div>
                <div class="col-md-6">
                    <h5>Liens rapides</h5>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('home') }}">Accueil</a></li>
                        <li><a href="{{ route('activites.show') }}">Activités</a></li>
                        <li><a href="{{ route('culture') }}">À propos</a></li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <div class="row">
                <div class="col-md-12 text-center">
                    <p>&copy; {{ date('Y')}} CCDB. Tous droits réservés.</p>
                </div>
            </div>
        </div>
    </footer>
    <style>
        .email-footer,.tel-footer {
            color: white;
            text-decoration: none;
        }
       .email-footer:hover, .tel-footer:hover{
        color: rgb(132, 131, 131);
       }
       
       
        
    
       
    </style>

    <!-- Ajoutez ici vos scripts JavaScript -->
    {{-- <script src="{{ asset('js/main.js') }}"></script> --}}
    <!-- Vous pouvez inclure d'autres scripts JS si nécessaire -->
    {{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
    {{-- <script amount="2000" 
        callback=""
        data=""
        position="center" 
        theme="#0095ff"
        sandbox="true"
        key="b37ba3e0c8e311eea2f66f7b8d0d5dbe"
        src="https://cdn.kkiapay.me/k.js"></script>
--}}
        <script> 
            document.addEventListener("DOMContentLoaded", function() {
                var toggleButton = document.getElementById("navbar-toggler-button"); // Remplacez "navbar-toggler-button" par l'ID de votre bouton de basculement

                toggleButton.addEventListener("click", function() {
                    var navbarCollapse = document.getElementById("navbarTextt"); // Remplacez "navbar-collapse" par l'ID de votre élément de navigation à masquer/afficher

                    if (navbarCollapse.classList.contains("show")) {
                        // Si oui, retirer la classe "show"
                        navbarCollapse.classList.remove("show");
                    } else {
                        navbarCollapse.classList.add("show");
                    }              
                });

                // const images = document.querySelectorAll('img');
                // images.forEach(image => {
                //     image.addEventListener('load', () => {
                //         image.style.display = 'block';
                //     });
                // });
            });

        </script>
        

     
    </body>
</html>

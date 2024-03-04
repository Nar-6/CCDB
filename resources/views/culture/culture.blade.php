@extends('../base')

@section('title', 'À propos')
@section('navigationpage')
<ul class="navbar-nav mr-auto">
  <li class="nav-item ">
      <a class="nav-link" href="/">Home<span class="sr-only"></span></a>
  </li>
  <li class="nav-item">
      <a class="nav-link" href="{{ route('activites.show') }}">Activités</a>
  </li>
  <li class="nav-item active">
    <a class="nav-link" href="{{ route('culture') }}">À propos</a>
</li>
</ul>
@endsection
@section('content')

<div class="bassila">
    <h1>Bassila</h1>
    <p>Bassila est une commune située dans le département de la Donga au centre du Bénin.
        <br>
         Cette commune est délimitée au nord par les communes de Ouaké et Djougou, au sud par les communes de Bantè et de Glazoué, 
         à l'est par celles de Tchaourou et de Ouèssè et à l'ouest par le Togo.
         <br>
         Lors du recensement de 2013 (RGPH-4), la commune comptait 130 091 habitants2.
         Les Nago et Koura deux dialectes Yoruba, représentent 57% de la population suivie par les Anii qui représentent 33% de la population. 
         Les Kotokoli représentent quant à eux 3% de la population puis enfin les Lokpa, les Ditammari, les Peuhl,
          les Fons et les Adja représentent ensemble 7% de la population.
          <br>
        L'agriculture, principale source de revenu des habitants de la commune, occupe plus de 80% de la population active.
         Les cultures tournent autour de denrées comme le manioc, le maïs, le sorgho, le riz , l'igname et le niébé. A cette liste s'ajoute les
          pépinières et plantations à dominance de manguiers et anacardiers.
           Il y a egalement de la sylviculture avec des espaces comme le tectona grandis qui procure les bois de teck.
        <br>
        Le Festival anii, créé en 2009, a lieu à Bassila depuis 2014, durant lequel des chants et des danses traditionnelles anii sont produites.</p>
</div>

<div class="contacter-div">
    <div class="container">
        @include('../partials/ecrire_email')
    </div>

    <div class="trait"></div>

    <div class="container" id="abonnement-form">
        @include('../partials/abonnement_form')
    </div>

    <div class="trait"></div>
    
    <div class="container" id="abonnement-form">
  
        <div id="sabonner" class="abonnement">
            <div class="entete-abonnement">
              <h2>Participez ici</h2>
              <h5>Pour accompagner l'émergence de cette commune.</h5>
            </div>
            
            <a href="https://www.paypal.com/donate/?hosted_button_id=WBKFYJG33DHUY"><button id="btn-abonnement" class="btn btn-abonnement">
                Faire un don
              </button></a>            
          </div>
              </div>
    
</div>

<div class="bassila">
    <h1>Merci</h1>
    <p>Merci pour l'intérêt que vous portez à notre communauté et pour votre soutien,
         quelle que soit la manière dont vous choisissez de contribuer à l'accomplissement de notre mission.
          Que ce soit en relayant des informations, en partageant le lien de notre site,
           en faisant des suggestions ou en apportant un soutien financier, nous vous en sommes reconnaissants. <br>

        Nous espérons que Dieu, dans Sa grande bonté, vous récompensera abondamment et nous guidera dans cette aventure. <br>
        
        Merci d'avoir visité notre site !</p>
</div>

<style>
    .bassila{
        margin: 30px;
        margin-top: 0;
        padding-top: 30px;
        margin-bottom: 0;
        padding-bottom: 30px;
        display: flex;
        justify-content: center;
        flex-direction: column;
        align-items: center;
    }
    .bassila h1{
        color: #50876c;
        font-weight: normal;
    }
    .bassila p{
        text-align: center;
    }
    .contacter-div{
        background: #252525;
        max-width: 1000px;
        margin: auto;
        padding: 30px;
        margin-top: 30px;
        margin-bottom: 30px;

    }
    .trait {
        border-top: 1px solid rgba(255, 255, 255, 0.53);
        width: 70%;
        margin: auto;
        margin-top: 20px;
        margin-bottom: 20px;

    }
</style>
   

@endsection


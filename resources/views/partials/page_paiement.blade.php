@extends('../base')

@section('title', 'Don')
@section('navigationpage')
<ul class="navbar-nav mr-auto">
  <li class="nav-item">
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

<div class="Faire-un-don">
    <div class="illlusttration">
        <img src="{{ asset('images/ccdb5.png')}}" width="300" height="300" alt="">
    </div>
    <form method="post" role="form" id="donForm">
        @csrf
        <div class="form-group">
            <label for="montant">Montant</label>
            <input type="text" name="montant" id="montant" class="form-control" required>
        </div>
        <button type="submit" id="btn-abonnement" class="kkiapay-button btn">Don</button>
    </form>
</div>

<style>
    .form-group{
        text-align: center;
    }
     form #btn-abonnement {
        margin-left: auto;
        margin-right: auto;
    }
    #montant {
        max-width: 40vw;
        margin-left: auto;
        margin-right: auto;

    }
</style>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const donForm = document.getElementById('donForm');
        donForm.addEventListener('submit', function (event) {
            // Empêche le formulaire de se soumettre normalement
            event.preventDefault();
            
            // Récupère la valeur du champ montant
            const montant = document.getElementById('montant').value;
            
            // // Met à jour l'attribut amount du script Kkiapay avec le montant récupéré
            // const script = document.querySelector('script[src="https://cdn.kkiapay.me/k.js"]');
            // script.setAttribute('amount', montant);
            openKkiapayWidget({
                amount:montant ,
                callback:"",
                data:"Don à l'ong",
                position:"center" ,
                theme:"#0095ff",
                sandbox:"true",
                key:"b37ba3e0c8e311eea2f66f7b8d0d5dbe"
        })
            // Soumet le formulaire
        });
    });
</script>
<script amount="" 
        callback=""
        data=""
        position="center" 
        theme="#0095ff"
        sandbox="true"
        key="b37ba3e0c8e311eea2f66f7b8d0d5dbe"
        src="https://cdn.kkiapay.me/k.js"></script>

        
@endsection


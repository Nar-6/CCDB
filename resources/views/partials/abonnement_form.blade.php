  
<div id="sabonner" class="abonnement">
    <div class="entete-abonnement">
      <h2>Abonnez-vous !</h2>
      <h5>Pour recevoir les notifications de futurs activités.</h5>
    </div>
    <form method="POST" action="{{ route('abonnement.store') }}">
        @csrf
  
        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom" class="form-control" required>
        </div>
  
        <div class="form-group">
            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" id="prenom" class="form-control" required>
        </div>
  
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email" class="form-control" required>
        </div>
  
        <div class="form-group">
            <label for="numero">Numéro de téléphone</label>
            <input type="tel" name="numero" id="numero" class="form-control" >
        </div>
        <button type="submit" id="btn-abonnement" class="btn btn-abonnement">S'abonner</button>
    </form>
  </div>
  
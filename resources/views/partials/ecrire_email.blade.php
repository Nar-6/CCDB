<div id="ecrirenous" class="abonnement">
    <div class="entete-abonnement">
        <h2>Ecrivez-nous !</h2>
        <h5>Pour nous faire des suggestions ou nous poser des questions pour plus d'éclaircissements,
        ou même pour demander à rejoindre nos activités ou notre communauté.</h5>
    </div>
    <form method="POST" action="{{ route('ecrire.email') }}">
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
            <label for="message">Message</label>
            <textarea name="message" id="message" class="form-control" required></textarea>
        </div>
        <button type="submit" id="btn-abonnement" class="btn btn-abonnement">Envoyer</button>
    </form>
</div>

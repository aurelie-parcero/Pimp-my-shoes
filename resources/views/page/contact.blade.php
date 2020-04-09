@extends('app')

@section('title', 'Contact')

@section('titre', 'CONTACTEZ-NOUS')

@section('contenu')

    <div class="Cformulaire">
        <form action="" method="post" id="contact-form">
            <label>PRÉNOM<br /><input type="text" name="firstName" id="firstName" required></label><br />
            <label>NOM<br /><input type="text" name="lastName" id="lastName" required></label><br />
            <label>EMAIL<br /><input type="email" name="email" id="email"placeholder="john.doe@gmail.com" required></label><br /><br />
            <label for="reason">Raison</label>
                <select name="reason" id="reason">
                    <option value="">-- Veuillez sélectionner la raison --</option>
                    <option value="reason1">Une commande</option>
                    <option value="reason2">La livraison</option>
                    <option value="reason3">Un retour</option>
                    <option value="reason4">Un article</option>
                    <option value="reason5">Autres</option>
                </select><br /><br />
            <label for="message">Message</label><br />
            <textarea name="message" id="message" rows="6" cols="45"></textarea><br /><br />
            <button class="CEnvoyer" type="submit" disabled>Envoyer</button><br />
        </form>
    </div>

@endsection

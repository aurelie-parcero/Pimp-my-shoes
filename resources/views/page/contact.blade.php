@extends('app')

@section('title', 'Contact')

@section('titre', 'CONTACTEZ-NOUS')

@section('contenu')

    <div class="Cformulaire">
        <form action="" method="post">
            <label>PRÉNOM<br /><input type="text" name="prénom" /></label><br />
            <label>NOM<br /><input type="text" name="prénom" /></label><br />
            <label>EMAIL<br /><input type="email" name="prénom" /></label><br /><br />
            <label for="Raison">Raison</label>
                <select name="Raison" id="Raison">
                    <option value="raison1">raison1</option>
                    <option value="raison2">raison2</option>
                    <option value="raison3">raison3</option>
                    <option value="raison4">raison4</option>
                    <option value="raison5">raison5</option>
                </select><br /><br />
            <label for="Message">Message</label><br />
            <textarea name="Message" id="Message" rows="6" cols="45"></textarea><br /><br />
            <button class="CEnvoyer" type="submit">Envoyer</button><br />
        </form>
    </div>

@endsection

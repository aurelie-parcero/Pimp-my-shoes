@extends('app')

@section('title', 'Contact')

@section('titre', 'CONTACTEZ-NOUS')

@section('contenu')

    <div class="formulaire">
        <form action="" method="post">
            <label>PRÉNOM<input type="text" name="prénom" /></label>
            <label>NOM<input type="text" name="prénom" /></label>
            <label>EMAIL<input type="email" name="prénom" /></label><br />
            <label for="Raison">Raison</label>
                <select name="Raison" id="Raison">
                    <option value="raison1">raison1</option>
                    <option value="raison2">raison2</option>
                    <option value="raison3">raison3</option>
                    <option value="raison4">raison4</option>
                    <option value="raison5">raison5</option>
                </select><br />
            <label for="Message">Message</label><br />
            <textarea name="Message" id="Message" rows="6" cols="45"></textarea><br />
            <button type="submit">Envoyer</button>
        </form>
    </div>

@endsection

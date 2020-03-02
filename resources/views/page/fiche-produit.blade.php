@extends('app')

@section('title', 'fiche-produit')

@section('titre', '')

@section('contenu')
    <div class="container">
        <img src="{{asset('')}}" alt="">
        <div class="fpImages">
            <img src="{{asset('')}}" alt="">
            <img src="{{asset('')}}" alt="">
            <img src="{{asset('')}}" alt=""><br /><br />
        </div>
        <div class="fpButton">
            <button name="Personaliser" type="button">Personaliser</button>
            <button name="Produit" type="button">Produit</button>
            <button name="Continuer" type="button">Continuer</button>
        </div><br /><br />
        <div class="fpChoixTaille">
            <p>Choisir la taille <label for="option"></label>
            <select name="option" id="option">
                <option value="36">36</option>
                <option value="37">37</option>
                <option value="37.5">37.5</option>
                <option value="38">38</option>
                <option value="38.5">38.5</option>
                <option value="39">39</option>
                <option value="39.5">39.5</option>
                <option value="40">40</option>
                <option value="40.5">40.5</option>
                <option value="41">41</option>
                <option value="42">42</option>
                <option value="43">43</option>
                <option value="44">44</option>
            </select></p>
        </div><br /><br />
        <h4 class="fpCenter">Description</h4>
        <p>La SneakerPi, est la chaussure mixed du moment, elle s’accorde avec tous les styles et tous les genres.
            Un classique à pimper !!</p>

        <h4>Composition</h4>
        <p>
            Tige : Cuir<br />
            Doublure : Synthétique<br />
            Semelle int. : Textie<br />
            Semelle ext. : Caoutchouc
        </p><br />
        <div class="fpButton">
            <button name="Ajouter au panier" type="button">Ajouter au panier</button>
        </div>
    </div>
@endsection

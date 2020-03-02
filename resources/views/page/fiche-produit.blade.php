@extends('app')

@section('title', 'fiche-produit')

@section('titre', '')

@section('contenu')

    @foreach($catalogue as $produit)

    <div class="fpContainer">
        <img src="{{$produit->link}}" alt="" class="fpImageDuProduit">
        <div class="fpImages">
            <img src="{{$produit->link}}" alt="" class="fpImagesPersonalisation">
            <img src="{{$produit->link}}" alt="" class="fpImagesPersonalisation">
            <img src="{{$produit->link}}" alt="" class="fpImagesPersonalisation">
        </div><br /><br />
        <div class="fpButton">
            <button name="Personaliser" type="button">Personaliser</button>
            <button name="Produit" type="button">Produit</button>
            <button name="Continuer" type="button" class="fpOrangeContinuer">Continuer</button>
        </div><br /><br />
        <div class="fpChoixTaille">
            <p>Choisir la taille <label for="option"></label>
            <select name="option" id="option">
                <option value="">Option</option>
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
        <p>{{$produit->description}}</p>

        <h4>Composition</h4>
        <p>
            Tige : Cuir<br />
            Doublure : Synthétique<br />
            Semelle int. : Textile<br />
            Semelle ext. : Caoutchouc
        </p><br />
        <div class="fpButton">
            <button name="Ajouter au panier" type="button">Ajouter au panier</button>
        </div>
    </div>

    @endforeach
@endsection

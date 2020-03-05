@extends('app')

@section('title', 'Admin')

@section('titre', 'Gestion des produits')

@section('contenu')

    <div class="Cformulaire">
        <form action="{{Route('insert')}}" method="post">
            {{csrf_field()}}
            <label>Name<br /><input type="text" name="product" /></label><br />
            <label>Upload img<br /><input type="text" name="upload" /></label><br />
            <label>Price<br /><input type="text" name="price" /></label><br /><br />
            <label for="Message">Description</label><br />
            <textarea name="Message" id="Message" rows="6" cols="45"></textarea><br /><br />
            <button class="CEnvoyer" type="submit">Envoyer</button><br />
        </form>
    </div>

@endsection

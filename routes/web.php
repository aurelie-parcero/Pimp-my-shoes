<?php

Route::get('/', 'ControllerAccueil@viewAccueilParNom');

if ($_POST == 'name') {

    Route::get('/', 'ControllerAccueil@viewByName');

} elseif ($_POST == 'price') {

    Route::get('/', 'ControllerAccueil@viewByPrice');
}

Route::get('/contact', 'ControllerContact@viewContact');

Route::get('/fiche-produit/{id}', 'ControllerFicheProduit@viewFicheProduit');

Route::get('/panier', 'ControllerPanier@viewPanier');

Route::get('/mentions-legales', 'ControllerMentionsLegales@viewMentionsLegales');

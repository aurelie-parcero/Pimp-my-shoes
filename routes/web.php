<?php

Route::get('/', 'ControllerAccueil@viewAccueil');

Route::get('/contact', 'ControllerContact@viewContact');

Route::get('/fiche-produit', 'ControllerFicheProduit@viewFicheProduit');

Route::get('/panier', 'ControllerPanier@viewPanier');

Route::get('/mentions-legales', 'ControllerMentionsLegales@viewMentionsLegales');

<?php

Route::get('/', 'ControllerAccueil@viewAccueilParNom');

Route::get('/contact', 'ControllerContact@viewContact');

Route::get('/fiche-produit/{id}', 'ControllerFicheProduit@viewFicheProduit');

Route::get('/panier', 'ControllerPanier@viewPanier');

Route::get('/mentions-legales', 'ControllerMentionsLegales@viewMentionsLegales');


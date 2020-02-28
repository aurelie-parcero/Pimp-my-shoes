<?php

Route::get('/', 'ControllerAccueil@ViewAccueil');

Route::get('/contact', 'ControllerContact@ViewContact');

Route::get('/fiche-produit', 'ControllerFicheProduit@ViewFicheProduit');

Route::get('/panier', 'ControllerPanier@ViewPanier');

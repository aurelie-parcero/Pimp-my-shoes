<?php

Route::get('/', 'ProductController@viewAccueilParNom');

Route::get('/nom', 'ProductController@viewAccueilParNom');

Route::get('/prix', 'ProductController@viewAccueilPrixCroissant');

Route::get('/contact', 'ControllerContact@viewContact');

Route::get('/fiche-produit/{id}', 'ControllerFicheProduit@viewFicheProduit');

Route::get('/panier', 'ControllerPanier@viewPanier');

Route::get('/mentions-legales', 'MentionsController@viewMentionsLegales');

Route::get('/admin', 'ControllerAdmin@viewAdmin');

Route::get('/insert', 'ControllerAdmin@insert')->name('insert');

Route::post('/update', 'ControllerAdmin@update');

Route::post('/delete', 'ControllerAdmin@delete');

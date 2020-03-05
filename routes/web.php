<?php

Route::get('/', 'ProductController@viewAccueilParNom');

Route::get('/nom', 'ProductController@viewAccueilParNom');

Route::get('/prix', 'ProductController@viewAccueilPrixCroissant');

Route::get('/contact', 'ControllerContact@viewContact');

Route::get('/fiche-produit/{id}', 'ControllerFicheProduit@viewFicheProduit');

Route::get('/panier', 'CartController@viewPanier');

Route::get('/mentions-legales', 'MentionsController@viewMentionsLegales');

Route::get('/admin', 'AdminController@viewAdmin');

Route::post('/admin', 'AdminController@insert')->name('insert');

Route::post('/update', 'AdminController@update');

Route::post('/delete', 'AdminController@delete');

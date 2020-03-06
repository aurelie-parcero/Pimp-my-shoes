<?php

Route::get('/', 'ProductController@viewAccueilParNom');

Route::get('/nom', 'ProductController@viewAccueilParNom');

Route::get('/prix', 'ProductController@viewAccueilPrixCroissant');

Route::get('/contact', 'ContactController@viewContact');

Route::get('/fiche-produit/{id}', 'FicheProduitController@viewFicheProduit');

Route::get('/panier', 'CartController@viewPanier');

Route::get('/mentions-legales', 'MentionsController@viewMentionsLegales');

Route::get('/admin', 'AdminController@viewAdmin');

Route::post('/admin', 'AdminController@insert')->name('insert');

Route::put('/fiche-produit/{id}', 'AdminController@update')->name('update');

Route::delete('/fiche-produit/{id}', 'AdminController@delete')->name('delete');

<?php

Route::get('/', 'AccueilController@viewAccueilParNom');

Route::get('/nom', 'AccueilController@viewAccueilParNom');

Route::get('/prix', 'AccueilController@viewAccueilPrixCroissant');

Route::get('/contact', 'ContactController@viewContact');

Route::get('/fiche-produit/{id}', 'FicheProduitController@viewFicheProduit');

Route::get('/panier', 'PanierController@viewPanier');

Route::get('/mentions-legales', 'MentionsLegalesController@viewMentionsLegales');

Route::get('/admin', 'AdminController@viewAdmin')->name ('insert');

//test route pour upload une image
Route :: get ('/admin' , 'AdminController@viewAdmin') -> name ('admin');
Route :: post ('/admin' , 'AdminController@viewAdminPost') -> name ('admin.post');

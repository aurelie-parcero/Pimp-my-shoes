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

Route::post('/update', 'AdminController@update');

Route::post('/delete', 'AdminController@delete');

//test route pour upload une image
//Route :: get ('/admin' , 'AdminController@viewAdmin') -> name ('admin');
//Route :: post ('/admin' , 'AdminController@viewAdminPost') -> name ('admin.post');
<?php

Route::get('/', 'ProductController@viewAccueilParNom');

Route::get('/nom', 'ProductController@viewAccueilParNom');

Route::get('/prix', 'ProductController@viewAccueilPrixCroissant');

Route::get('/contact', 'ContactController@viewContact');

Route::get('/fiche-produit/{id}', 'FicheProduitController@viewFicheProduit');

Route::get('/panier', 'CartitemController@viewPanier')->middleware('auth')->name("my-cart");

Route::get('/panier/{id}', 'CartitemController@insertItem')->middleware('auth')->name('insertItem');

Route::get('/mentions-legales', 'MentionsController@viewMentionsLegales');

Route::get('/admin', 'AdminController@viewAdmin')->middleware('auth')->name('admin');

Route::post('/admin', 'AdminController@insert')->name('insert');

Route::put('/fiche-produit/{id}', 'AdminController@update')->name('update');

Route::delete('/fiche-produit/{id}', 'AdminController@delete')->name('delete');

Route::get('/deconnexion', 'UserController@deconnexion');

Route::post('/register', 'RegisterController@insert');

Auth::routes();



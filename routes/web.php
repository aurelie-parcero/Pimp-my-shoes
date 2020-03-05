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

Route::put('/fiche-produit/{id}', 'AdminController@update')->name('update');

Route::delete('/fiche-produit/{id}', 'AdminController@delete')->name('delete');


// Sonia

//Route::get('/manage', 'ManagerController@manage');
//Route::delete('/manage/{id}','ManagerController@deletePost');
//Route::put('/manage/{id}','ManagerController@updatePost');
//Route::post('/manage','ManagerController@addPost');

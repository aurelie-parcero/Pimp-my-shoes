<?php

Route::get('/', function () {
    return view('page/accueil');
});

Route::get('/contact', function () {
    return view('page/contact');
});

Route::get('/fiche-produit', function () {
    return view('page/fiche-produit');
});

Route::get('/panier', function () {
    return view('page/panier');
});


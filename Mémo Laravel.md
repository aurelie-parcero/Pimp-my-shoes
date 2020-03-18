# ***Mémo Laravel***

### **installer composer**

Télécharger ce fichier >> https://getcomposer.org/Composer-Setup.exe
l'executer et suivre les instructions d'installation.

### **installer laravel**

1. Ce placer dans le dossier ou l'on veut crée notre projet
2. Clique droit puis cliquer sur `Git Bash Here`
3. Enfin taper la commande suivante pour l'installation
```
composer create-project laravel/laravel --prefer-dist nomDuProjet
```

### **Les routes**

Pour crée une route allez dans :

Dossier 'route' / Crée un fichier nomDuFichier.php / Puis coder dedans les routes

 **Exemple** 
```
Route::get('/salut/{name}', function($name){
    return 'Salut ' . $name;
});
```

**Intéragir en ligne de commande avec les routes**

*Lister les routes*
```
php artisan route:list
```

*Donner des noms au routes*
```
Route::get('salut/{slug}-{id}', ['as' => 'nomDeLaRoute' ,function ($slug, $id){
    return "Slug : $slug, ID : $id";
}])->where('name', '[a-Z0-9\-]+')->where('id', '[0-9]+');
```

*Grouper des routes*
```
Route::group(['prefix' => 'admin'], function(){
    
    Route::get('salut/{slug}-{id}', ['as' => 'nomDeLaRoute' ,function ($slug, $id){
    return "Slug : $slug, ID : $id";
    }])->where('name', '[a-Z0-9\-]+')->where('id', '[0-9]+');

});
```
Ce qui aura pour effet de ne plus avoir accès à la route 'nomDeLaRoute' via `salut/slug-10` mais par `admin/salut/slug-10`

Conclusion
Tous les chemins ne fonctionneron qu'avec le préfix du group.

### **Middleware**

*Pour crée un middleware taper ceci*
```
php artisan make:middleware nomDuMiddleware
```

*Pour débug la requète faites ceci dans la méthode handle*
```
dd($request->nomDeLaClasseDuMiddleware());
```

*Définir le middleware au niveau des routes*

Allez dans le Kernel.php et dans `$middleware`, puis taper ceci à la suite pour le définir en global
```
\App\Http\Middleware\nomDuMiddleware::class,
```
Sinon pour le rendre disponible seulement quand on en a besoin il faut le mettre dans `$routeMiddleware` comme ceci toujours à la suite
```
'nomDuMiddleware' => \App\Http\Middleware\nomDuMiddleware::class,
```
De cette manière il n'est pas encore utiliser il faut ensuite le préciser dans les paramètres des `Routes` comme ceci
```
Route::group(['prefix' => 'admin', 'middleware' => 'nomDuMiddleWare'], function(){

    Route::get('salut/{slug}-{id}', ['as' => 'nomDeLaRoute' ,function ($slug, $id){
        return "Slug : $slug, ID : $id";
    }])->where('name', '[a-Z0-9\-]+')->where('id', '[0-9]+');

});

```
Ensuite on met notre condition dans le middleware

**Exemple (ip)**
```
public function handle($request, Closure $next)
    {
        if ($request->ip() == "ton IP (tu peux la récupérer dans les étapes précédente)") {
            return $next($request);
        }
        return response('Unauthorized', 401);
    }
```
Si l'on veut la mettre après la requète
```
$request = $next($request);
//résultat de larequète ici
```

### **Controllers**

*Crée et définir un controller*
Dans `App\Http\Controllers` on crée un nouveau fichier monController.php (ou faire la commande `php artisan make:controller`)
Ensuite on peut coder notre controller
```
<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class monController extends Controller {

    public function index($name)
    {
        return "Salut $name"; 
    }
}
```
Il est ensuite possible de faire appelle à ce controller et cette méthode (appellée "action") en utilisant les routes comme ceci
`Route::get('/test/{name}', 'MonController@index');`

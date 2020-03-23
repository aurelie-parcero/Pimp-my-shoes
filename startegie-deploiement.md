# Procédure de déploiement pimp-my-shoes.com

1. Se connecter au serveur en ssh via Putty:

`IP: 142.93.138.173`

`pimp@PimpMyShoesServer`

`mot de passe: voir avec le boss`

2. Créer un nouveau répertoire sur le serveur dans `/var/www/html/` où cloner la version Git souhaitée du projet (Ne pas oublier d'installer les dépendances nécessaires etc). Pour cela, utiliser les tags pour identifier les différentes versions.

* Les tags Github doivent être sous la forme:
 `v(Numérodeversion)-année-mois-jour`

3. Modifier le fichier de configuration dans le dossier /etc/nginx/sites-available:

  Ligne `root`: faire pointer sur le nouveau répertoire, dossier `public`

4. Vérifier la configuration: 
`sudo nginx -t`

  Et relancer le serveur:

`sudo systemctl restart nginx`

5. Pour rollback, re-modifier la ligne `root` dans le fichier de configuration pour pointer vers le répertoire souhaité.


## POC1:

### Objectif: 
Test de session utilisateur lors du switch sur une autre version.

La session de l'utilisateur peut-elle être conservée, ceci afin de ne pas perturber les achats en cours?

### Résultat: 
Via cette procédure, l'utilisateur est déconnecté lors du switch.

### Solution envisagée:
Conserver les données de session à l'aide des cookies.
# Stratégie de déploiement

## Objectif:

Mettre en ligne une nouvelle version du site.

## Procédure:

1. Créer un nouveau répertoire où cloner la version Git souhaitée du projet (Ne pas oublier d'installer les dépendances nécessaires etc). Pour cela, utiliser les tags pour identifier les différentes versions.
2. Modifier le fichier de configuration dans le dossier /etc/nginx/sites-available:

  Ligne `root`: faire pointer sur le nouveau répertoire

3. Vérifier la configuration: 
`sudo nginx -t`

  Et relancer le serveur:

`sudo systemctl restart nginx`

4. Pour rollback, re-modifier la ligne `root` dans le fichier de configuration.


## POC:

Test de session utilisateur lors du switch sur une autre version.

La session de l'utilisateur peut-elle être conservée, ceci afin de ne pas perturber les achats en cours?

### Résultat: 
Via cette procédure, l'utilisateur est déconnecté lors du switch.

### Solution envisagée:
Conserver les données de session à l'aide des cookies.
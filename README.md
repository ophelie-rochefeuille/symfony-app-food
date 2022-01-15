# symfony-app-food

Getting starded ! 

Required

Avoir Docker installé et télécharger la bdd envoyée par mail 

Démarrer le projet: 

- Cloner le projet et afficher l'invite de commande dans celui-ci
- Commande à executer dans le terminal (dans "symfony-app-food/project") afin d'installer les dépendances nécessaires : "composer install --ignore-platform-reqs"
- Commande à executer dans le terminal (être placé dans le dossier où figure le docker-compose.yml "symfony-app-food/"): "docker-compose up -d"
- lancer les localhosts suivants : 
  - Pour l'affichage de l'application:  "http://localhost:8741/"
  - Pour phpMyAdmin: "http://localhost:5000/"
                     utilisateur: "root"
                     mot de pass: "" (null)  
                     
- importer la bdd envoyée par mail dans phpMyAdmin 
- Pour accéder aux parties réservées aux ROLE_ADMIN (restaurateurs) : "http://localhost:8741/admin". Seul le User "Admin Restaurateur" a les droits du ROLE_ADMIN, pour se connecter avec ce compte: email "admin@admin.com" || mdp "restaurateur".

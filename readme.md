Site L'imprimeur
----

### Access

- web : http://localhost:8181
- phpmyadmin : http://localhost/8585
- mailhog : http://localhost:8025

### Installation

- Installer les dépendances JS :
```
npm install
```

- Installer les dépendances PHP :
```
composer install
```

- Installer les fichiers CSS :
```
npm run process-styles
```

- lancer docker :
```
docker-compose start
```

- arrêter docker :
```
docker-compose stop
```

- construire les services : 
```
docker-compose up --build -d
``` 

### Déploiement 

- Adresse de production : http://88.198.243.216/

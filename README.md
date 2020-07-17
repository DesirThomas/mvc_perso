# Site personnel DESIR Thomas

Application WEB créer par DESIR Thomas afin de se présenter en tant que Développeur Web, et utilisé comme projet chef-d'oeuvre pour sa certification professionnel.

------------  
# Logiciel utilisé :

Visual Studio Code

------------  
# Pré-requis :

* PHP version ^7.0 (7.3 ou 7.4 recommandé)
* Extension Visual S. Code : *Live Sass Compiler* (ritwickdey.live-sass)

------------  
# Installation :
1. Cloner le répertoire via GitHub :
`https://github.com/DesirThomas/mvc_perso.git`

2. Configurer *Live Sass Compiler* en insérant dans le fichier "**settings.json**" de *Visual Studio Code* :
```
{
	"format": "compressed",
	"extensionName": ".min.css",
	"savePath": "~/../css/"
}
```

3. Activer *Live Sass Compiler* en cliquant sur "*Watch Sass*" présent -plus ou moins ?- en bas à droite de Visual Studio Code. Pensez à le ré-actualiser si jamais le CSS se comporte étrangement, il peut en avoir besoin.

4. Dans "**/config/**" :
Copier "**database-sample.php**" et renommez votre copie en "**database.php**".
Configurez-le.

5. (Ignorez cette étape, il n'y a pas encore de BDD utilisée dans ce projet) Importer le fichier ".sql" via *PhPMyAdmin*. 

6. Yay. Vous devriez être bon.
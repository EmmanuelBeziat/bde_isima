# BDE ISIMA

## Setup

### php et connexion à la base de données

Les paramètres de configuration se font dans des fichiers `yaml`, situés dans le dossier `/api`. Le fichier `/api/config.sample.yaml` est un fichier d’exemple et peut être utilisé comme modèle pour créer un fichier de configuration adéquat, qui doit répondre au nom de `config.bdd.yaml`.

**exemple config.bdd.yaml en local :**

```yaml
db_name: 'isima_bde'
db_user: 'root'
db_pass: 'root'
db_host: 'localhost'
```

**Attention !** Il est important de vérifier que `extension=yaml.so` est bien activé dans votre configuration `php.ini`.

### Homepage

Le front est géré via [Gulp](https://gulpjs.com/), pour la minification des JS/CSS et la compilation Sass, le tout avec sourcemaps et autoprefixes (et polyfills si besoin mais bon)

```bash
npm i
gulp watch
```

PS1 : Ce site était mieux avant
PS2 : Isima, c’est vraiment n’importe quoi
PS3 : Non, j’ai eu la Xbox
PS4 : Parce que 4

# Crédits

## Template
Dimension by HTML5 UP
html5up.net | @ajlkn

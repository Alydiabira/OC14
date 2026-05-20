<img src="assets/images/logo.png" alt="CritiPixel" width="200" />

# CritiPixel

## Pré-requis
* PHP >= 8.2
* Composer
* Extension PHP Xdebug
* Symfony (binaire)

## Installation

### Composer
Dans un premier temps, installer les dépendances :
```bash
composer install
```

### Docker (optionnel)
Si vous souhaitez utiliser Docker Compose, il vous suffit de lancer la commande suivante :
```bash
docker compose up -d
```

## Configuration

### Base de données
Actuellement, le fichier `.env` est configuré pour la base de données PostgreSQL mise en place dans `docker-compose.yml`.
Cependant, vous pouvez créer un fichier `.env.local` si nécessaire pour configurer l'accès à la base de données.
Exemple :
```dotenv
DATABASE_URL=mysql://root:Password123!@host:3306/criti-pixel
```

### PHP (optionnel)
Vous pouvez surcharger la configuration PHP en créant un fichier `php.local.ini`.

De même pour la version de PHP que vous pouvez spécifier dans un fichier `.php-version`.

## Usage

### Base de données

#### Supprimer la base de données
```bash
symfony console doctrine:database:drop --force --if-exists
```

#### Créer la base de données
```bash
symfony console doctrine:database:create
```

#### Exécuter les migrations
```bash
symfony console doctrine:migrations:migrate -n
```

#### Charger les fixtures
```bash
symfony console doctrine:fixtures:load -n --purge-with-truncate
```

*Note : Vous pouvez exécuter ces commandes avec l'option `--env=test` pour les exécuter dans l'environnement de test.*

### SASS

#### Compiler les fichiers SASS
```bash
symfony console sass:build
```
*Note : le fichier `.symfony.local.yaml` est configuré pour surveiller les fichiers SASS et les compiler automatiquement quand vous lancez le serveur web de Symfony.*

### Tests
```bash
php bin/phpunit
```

*Note : Penser à charger les fixtures avant chaque éxécution des tests.*

### Serveur web
```bash
symfony serve
```




✅ 1) INSTALLATION DES OUTILS D’ANALYSE STATIQUE
✔ Installer PHPStan
bash
composer require --dev phpstan/phpstan phpstan/phpstan-symfony phpstan/phpstan-doctrine phpstan/phpstan-phpunit phpstan/phpstan-strict-rules phpstan/phpstan-deprecation-rules

✔ Installer PHP CS Fixer
bash
composer require --dev friendsofphp/php-cs-fixer

✔ (Optionnel) Installer Psalm
bash
composer require --dev vimeo/psalm

✅ 2) CONFIGURATION DES OUTILS
✔ PHPStan (phpstan.neon ou phpstan.dist.neon)
Tu l’as déjà, mais voici la commande pour vérifier la config :
bash
vendor/bin/phpstan analyse --memory-limit=1G

✔ PHP CS Fixer
bash
vendor/bin/php-cs-fixer fix --dry-run --diff

Pour appliquer les corrections :
bash
vendor/bin/php-cs-fixer fix

✅ 3) EXÉCUTER LES TESTS
✔ Tests unitaires + fonctionnels
bash
php bin/phpunit --testdox

⚠️ NE PAS utiliser symfony php bin/phpunit  
→ Cela lance les tests en environnement dev → 34 erreurs.
✅ 4) COMMANDES POUR METTRE EN PLACE LA CI GITHUB ACTIONS
✔ Créer le dossier GitHub Actions
bash
mkdir -p .github/workflows

✔ Créer le fichier de pipeline
bash
touch .github/workflows/ci.yml

✔ Vérifier la syntaxe YAML
bash
yamllint .github/workflows/ci.yml

✔ Lancer la pipeline en local (optionnel)
bash
act -j tests

🧱 5) COMMANDES UTILISÉES DANS LA PIPELINE
✔ Installer les dépendances
bash
composer install --no-interaction --prefer-dist

✔ Préparer la base de données de test
bash
php bin/console doctrine:database:create --env=test
php bin/console doctrine:migrations:migrate --no-interaction --env=test
php bin/console doctrine:fixtures:load --no-interaction --env=test

✔ Lancer les tests
bash
php bin/phpunit --testdox

✔ Lancer PHPStan
bash
vendor/bin/phpstan analyse --memory-limit=1G

✔ Lancer PHP CS Fixer
bash
vendor/bin/php-cs-fixer fix --dry-run --diff

🟩 6) COMMENT VALIDER L’EXERCICE (AUTO‑ÉVALUATION)
Tu dois pouvoir cocher toutes ces cases :
✔ Intégration continue expliquée
→ Tu dois être capable d’expliquer :
ce qu’est la CI
pourquoi elle garantit la qualité
comment elle empêche les régressions
✔ Pipeline CI fonctionnelle
→ Le dernier commit doit afficher un check vert sur GitHub.
✔ Tests exécutés automatiquement
→ PHPUnit doit tourner dans la pipeline.
✔ Analyse statique exécutée automatiquement
→ PHPStan + PHP CS Fixer doivent tourner dans la pipeline.
✔ Pas d’erreurs
→ La pipeline doit être verte.
🟦 7) COMMANDES POUR DÉPLOYER TON SITE
Si tu utilises Symfony CLI Cloud :
bash
symfony deploy --prod

Si tu utilises un hébergement classique :
bash
composer install --no-dev --optimize-autoloader
php bin/console cache:clear --env=prod
php bin/console cache:warmup --env=prod




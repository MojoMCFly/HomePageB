# symfony-demo
with bootstrap font-awesome, jquery pre installed
compile with webpack.

# Setup project after checkout
## Load Node Modules
if not installed download yarn [here](https://yarnpkg.com/lang/en/docs/install/#windows-stable)
```bash
yarn install
```
## Load assets with webpack
compile assets once
```bash
 ./node_modules/.bin/encore dev
```
recompile assets automatically when files change
```bash
 ./node_modules/.bin/encore dev --watch
```
compile assets, but also minify and optimize them
```bash
 ./node_modules/.bin/encore production
```

## Check the .env file for database migration
### create database with
```bash
(php) bin/console doctrine:database:create
```
### create a migration file with
```bash
(php) bin/console  make:migration
```
### then migrate the database with
```bash
(php) bin/console  doctrine:migrations:migrate
```

# Maybe useful


### Start server with
```bash
(php) bin/console server:run
```
### Create entity
```bash
(php) bin/console make:entity
```
### Create controller
```bash
(php) bin/console make:controller
```

### enjoy
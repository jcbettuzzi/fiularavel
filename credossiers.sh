#!/bin/bash

# Il faut créer un fichier .env ( à partir de env-test par exemple)
# attention il faut passer la commande:
# composer update
# pour que php artisan key focntionne

mkdir ./storage/app
mkdir ./storage/app/public
mkdir ./storage/framework
mkdir ./storage/framework/cache
mkdir ./storage/framework/cache/data
mkdir ./storage/framework/sessions
mkdir ./storage/framework/testing
mkdir ./storage/framework/views
mkdir ./storage/logs


php artisan key:generate



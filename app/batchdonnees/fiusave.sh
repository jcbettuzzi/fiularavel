#!/bin/bash
cd /home/ubuntu/areapartage
mysqldump -u root -pXtiever9% --routines --no-create-db  --result-file=blogarea.sql  blogarea
cd /var/www/html/fiularavel
php artisan app:creation-site-map
cd public
cp ../sitemap01.xml sitemap.xml

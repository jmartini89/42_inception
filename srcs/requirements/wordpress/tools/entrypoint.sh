#!/bin/sh

sed -i 's|DATABASE_NAME|'${WP_DB_NAME}'|g' /var/www/html/wordpress/wp-config.php
sed -i 's|DATABASE_USER|'${WP_DB_USER}'|g' /var/www/html/wordpress/wp-config.php
sed -i 's|DATABASE_PASS|'${WP_DB_PASSWORD}'|g' /var/www/html/wordpress/wp-config.php
sed -i 's|DATABASE_HOST|'${WP_DB_HOST}'|g' /var/www/html/wordpress/wp-config.php

php-fpm7 -FR
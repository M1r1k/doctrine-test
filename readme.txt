Install:

composer install && php vendor/bin/doctrine.php orm:schema-tool:create

Before test:

php vendor/bin/doctrine.php orm:schema-tool:drop --force && php vendor/bin/doctrine.php orm:schema-tool:create

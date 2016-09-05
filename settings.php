<?php

use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;

$paths = [__DIR__."/src/Entity/"];
$isDevMode = TRUE;

// the connection configuration
$dbParams = [
  'driver'   => 'pdo_sqlite',
  'path'     => 'db.db',
];

$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, NULL, NULL, FALSE);
$entityManager = EntityManager::create($dbParams, $config);



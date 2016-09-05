<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Doctrine\ORM\Tools\Setup;
use Doctrine\ORM\EntityManager;
use Symfony\Component\Validator\Validation;

$loader = require __DIR__ . '/vendor/autoload.php';
$paths = [__DIR__."/src/Entity/"];
$isDevMode = TRUE;

// the connection configuration
$dbParams = [
  'driver'   => 'pdo_sqlite',
  'path'     => 'db.db',
];
AnnotationRegistry::registerLoader(array($loader, 'loadClass'));
$config = Setup::createAnnotationMetadataConfiguration($paths, $isDevMode, NULL, NULL, FALSE);
$entityManager = EntityManager::create($dbParams, $config);

$validator = Validation::createValidatorBuilder()
  ->enableAnnotationMapping()
  ->getValidator();

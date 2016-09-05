<?php
use Doctrine\ORM\Tools\Console\ConsoleRunner;

require_once "./vendor/autoload.php";
require_once "./settings.php";

return ConsoleRunner::createHelperSet($entityManager);

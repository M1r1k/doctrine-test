<?php

use Entity\Client;
use Entity\Country;
use Entity\Status;

require_once "./vendor/autoload.php";
require_once "./settings.php";

$country = new Country();
$country->setId('ua')
  ->setLabel('Ukraine');
$entityManager->persist($country);

$status = new Status();
$status->setId('krasavchik')
  ->setName('Good');
$entityManager->persist($status);

$client = new Client();
$client->setActionDate(time())
  ->setCompanyName('CoffeeLife')
  ->setCountry($country)
  ->setStatus($status)
  ->setEmail('cl@gmail.com')
  ->setType('?')
  ->setUrl('http://coffeelife.com.ua/en/');

$entityManager->persist($client);
$entityManager->flush();


<?php

use Entity\Client;
use Entity\Country;
use Entity\Status;

require_once "./vendor/autoload.php";
require_once "./settings.php";

try {
  $countryUA = new Country();
  $entityManager->persist($countryUA);
}
catch (\Exception $e) {
  echo "validation was successful\n";
}

$countryUA = new Country();
$countryUA->setId('ua')
  ->setLabel('Ukraine');
$entityManager->persist($countryUA);

$countryDK = new Country();
$countryDK->setId('da')
  ->setLabel('Denmark');
$entityManager->persist($countryDK);

$statusGood = new Status();
$statusGood->setId('krasavchik')
  ->setName('Good');
$entityManager->persist($statusGood);

$statusBad = new Status();
$statusBad->setId('ooohhh')
  ->setName('Bad');
$entityManager->persist($statusBad);



$clientCL = new Client();
$clientCL->setActionDate(time())
  ->setCompanyName('CoffeeLife')
  ->setCountry($countryUA)
  ->setStatus($statusGood)
  ->setEmail('cl@gmail.com')
  ->setType('?')
  ->setUrl('http://coffeelife.com.ua/en/');

$client3L = new Client();
$client3L->setActionDate(time())
  ->setCompanyName('Три ноги')
  ->setCountry($countryUA)
  ->setStatus($statusBad)
  ->setEmail('cl@gmail.com')
  ->setType('?')
  ->setUrl('http://coffeelife.com.ua/en/');

$entityManager->persist($client3L);

$clientP = new Client();
$clientP->setActionDate(time())
  ->setCompanyName('Papiroen')
  ->setCountry($countryDK)
  ->setStatus($statusGood)
  ->setEmail('cl@gmail.com')
  ->setType('?')
  ->setUrl('http://coffeelife.com.ua/en/');

$entityManager->persist($clientP);

$invalidClient = new Client();
$invalidClient->setCountry($countryDK)
  ->setCompanyName('Papiroen')
  ->setStatus($statusGood)
  ->setEmail('clgmail.com')
  ->setType('?')
  ->setUrl('http://coffeelife.com.ua/en/');
$violations = $validator->validate($invalidClient);

var_dump($violations->get(0)->getMessage());
var_dump($violations->get(0)->getPropertyPath());

$entityManager->flush();


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

$entityManager->flush();

$clientCL = new Client();
$clientCL->setActionDate(time())
  ->setCompanyName('CoffeeLife')
  ->setCountry($countryUA)
  ->setStatus($statusGood)
  ->setEmail('cl@gmail.com')
  ->setType('?')
  ->setUrl('http://coffeelife.com.ua/en/');
$entityManager->persist($clientCL);

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
  ->setStatus($statusBad)
  ->setEmail('clgmail.com')
  ->setType('?')
  ->setUrl('http://coffeelife.com.ua/en/');
$violations = $validator->validate($invalidClient);

echo $violations->get(0)->getMessage() . "\n";
echo $violations->get(1)->getMessage() . "\n";
echo $violations->get(2)->getMessage() . "\n";

$entityManager->flush();

$clientCL = $entityManager->find(Client::class, $clientCL->getId());
echo $clientCL->getCompanyName() . "\n";
echo $clientCL->getCountry()->getLabel() . "\n";

$clients = $entityManager->getRepository(Client::class)->findBy(['country' => 'ua'], ['companyName' => 'ASC'], 2, 0);
echo $clients[1]->getCompanyName() . "\n";
echo $clients[1]->getCountry()->getLabel() . "\n";

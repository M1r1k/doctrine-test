<?php

namespace EntityRepository;

use Doctrine\ORM\EntityRepository;

class ClientRepository extends EntityRepository {

  public function getAllGoodClientsByCountry(string $country) {
    $query = $this->_em->createQuery('SELECT c FROM Entity\Client c WHERE c.country = :country AND c.status = :status');
    $query->setParameters(['country' => $country, 'status' => 'krasavchik']);
    return $query->getResult();
  }

}
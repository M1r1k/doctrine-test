<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @Doctrine\ORM\Mapping\Entity
 * @Doctrine\ORM\Mapping\Table(name="countries")
 */
class Country {

  /**
   * @var string
   * @ORM\Id
   * @ORM\Column(type="string")
   */
  private $id;

  /**
   * @var string
   * @ORM\Column(type="string")
   */
  private $label;

  /**
   * @return string
   */
  public function getId(): string {
    return $this->id;
  }

  /**
   * @param string $id
   * @return Country
   */
  public function setId(string $id): Country {
    $this->id = $id;
    return $this;
  }

  /**
   * @return string
   */
  public function getLabel(): string {
    return $this->label;
  }

  /**
   * @param string $label
   * @return Country
   */
  public function setLabel(string $label): Country {
    $this->label = $label;
    return $this;
  }

}
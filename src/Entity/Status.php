<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @Doctrine\ORM\Mapping\Entity
 * @Doctrine\ORM\Mapping\Table(name="statuses")
 */
class Status {

  /**
   * @var string
   * @ORM\Id
   * @ORM\Column(type="string")
   */
  private $id;

  /** @var string
   * @ORM\Column(type="string")
   */
  private $name;

  /**
   * @return string
   */
  public function getId(): string {
    return $this->id;
  }

  /**
   * @param string $id
   * @return Status
   */
  public function setId(string $id): Status {
    $this->id = $id;
    return $this;
  }

  /**
   * @return string
   */
  public function getName(): string {
    return $this->name;
  }

  /**
   * @param string $name
   * @return Status
   */
  public function setName(string $name): Status {
    $this->name = $name;
    return $this;
  }

}
<?php

namespace Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
use Validator\Constraints as AssertArtem;

/**
 * @Doctrine\ORM\Mapping\Entity
 * @Doctrine\ORM\Mapping\Table(name="clients")
 * @AssertArtem\BusinessHotelka()
 */
class Client {
  /**
   * @var int
   * @ORM\Id
   * @ORM\GeneratedValue(strategy="AUTO")
   * @ORM\Column(type="integer")
   */
  private $id;

  /**
   * @var string
   * @ORM\Column(type="string")
   */
  private $type;

  /**
   * @var string
   * @ORM\Column(type="string")
   * @Assert\NotBlank()
   */
  private $companyName;

  /** @var string
   * @ORM\Column(type="string")
   */
  private $url;

  /** @var int
   * @ORM\Column(type="string")
   */
  private $actionDate;

  /**
   * @var Status
   * @ORM\OneToOne(targetEntity="Status")
   * @ORM\JoinColumn(name="status", referencedColumnName="id")
   */
  private $status;

  /**
   * @var string
   * @ORM\Column(type="string")
   * @Assert\Email(message="Email is not valid")
   */
  private $email;

  /**
   * @var Country
   * @ORM\OneToOne(targetEntity="Country")
   * @ORM\JoinColumn(name="country", referencedColumnName="id")
   */
  private $country;

  /**
   * @return int
   */
  public function getId(): int {
    return $this->id;
  }

  /**
   * @param int $id
   * @return Client
   */
  public function setId(int $id): Client {
    $this->id = $id;
    return $this;
  }

  /**
   * @return string
   */
  public function getType(): string {
    return $this->type;
  }

  /**
   * @param string $type
   * @return Client
   */
  public function setType(string $type): Client {
    $this->type = $type;
    return $this;
  }

  /**
   * @return string
   */
  public function getCompanyName(): string {
    return $this->companyName;
  }

  /**
   * @param string $companyName
   * @return Client
   */
  public function setCompanyName(string $companyName): Client {
    $this->companyName = $companyName;
    return $this;
  }

  /**
   * @return string
   */
  public function getUrl(): string {
    return $this->url;
  }

  /**
   * @param string $url
   * @return Client
   */
  public function setUrl(string $url): Client {
    $this->url = $url;
    return $this;
  }

  /**
   * @return int
   */
  public function getActionDate(): int {
    return $this->actionDate;
  }

  /**
   * @param int $actionDate
   * @return Client
   */
  public function setActionDate(int $actionDate): Client {
    $this->actionDate = $actionDate;
    return $this;
  }

  /**
   * @return Status
   */
  public function getStatus(): Status {
    return $this->status;
  }

  /**
   * @param Status $status
   * @return Client
   */
  public function setStatus(Status $status): Client {
    $this->status = $status;
    return $this;
  }

  /**
   * @return string
   */
  public function getEmail(): string {
    return $this->email;
  }

  /**
   * @param string $email
   * @return Client
   */
  public function setEmail(string $email): Client {
    $this->email = $email;
    return $this;
  }

  /**
   * @return Country
   */
  public function getCountry(): Country {
    return $this->country;
  }

  /**
   * @param Country $country
   * @return Client
   */
  public function setCountry(Country $country): Client {
    $this->country = $country;
    return $this;
  }


}
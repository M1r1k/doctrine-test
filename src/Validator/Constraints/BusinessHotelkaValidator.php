<?php

namespace Validator\Constraints;

use Entity\Client;
use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;
use Symfony\Component\Validator\Exception\UnexpectedTypeException;

class BusinessHotelkaValidator extends ConstraintValidator {
  /**
   * {@inheritdoc}
   */
  public function validate($client, Constraint $constraint)
  {
    /** @var Client $client */
    if (!$constraint instanceof BusinessHotelka) {
      throw new UnexpectedTypeException($constraint, __NAMESPACE__.'\NotBlank');
    }

    if ('da' === $client->getCountry()->getId() && 'ooohhh' === $client->getStatus()->getId()) {
      $this->context->buildViolation($constraint->message)
        ->setParameter('{{ value }}', $this->formatValue($client->getStatus()->getName()))
        ->setCode(5)
        ->addViolation();
    }
  }
}
<?php

namespace Validator\Constraints;

use Symfony\Component\Validator\Constraint;

/**
 * @Annotation
 * @Target({"CLASS", "PROPERTY", "METHOD", "ANNOTATION"})
 */
class BusinessHotelka extends Constraint {
  public $message = 'There is no bad places in Denmark';

  /**
   * {@inheritdoc}
   */
  public function getTargets() {
    return self::CLASS_CONSTRAINT;
  }

}
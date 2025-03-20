<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

final class OlderThan18Validator extends ConstraintValidator
{
    public function validate(mixed $value, Constraint $constraint): void
    {
        /** @var OlderThan18 $constraint */

        if (null === $value || '' === $value) {
            return;
        }

        $minAge = 18;
        $minAgeDate = (new \DateTime())->modify("-$minAge years");

        if ($value >= $minAgeDate) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $value->format('Y-m-d'))
                ->addViolation();
        };
    }
}

<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

final class NoLetterAValidator extends ConstraintValidator
{
    public function validate(mixed $value, Constraint $constraint): void
    {
        /** @var NoLetterA $constraint */

        if (null === $value || '' === $value) {
            return;
        }

        // TODO: implement the validation here
        if (strpos($value, 'a') !== false) {

            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $value)
                ->addViolation();
        }
    }
}

<?php

namespace App\Validator;

use Symfony\Component\Validator\Constraint;
use Symfony\Component\Validator\ConstraintValidator;

final class NotTestDotComValidator extends ConstraintValidator
{
    public function validate(mixed $value, Constraint $constraint): void
    {
        /** @var NotTestDotCom $constraint */

        if (null === $value || '' === $value) {
            return;
        }

        // TODO: implement the validation here
        if (str_ends_with($value, '@test.com')) {
            $this->context->buildViolation($constraint->message)
                ->setParameter('{{ value }}', $value)
                ->addViolation();
        };
    }
}

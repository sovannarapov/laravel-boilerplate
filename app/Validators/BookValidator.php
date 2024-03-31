<?php

namespace App\Validators;

use Mangopie\Core\Validators\BaseValidator;
use Prettus\Validator\Contracts\ValidatorInterface;

/**
 * Class BookValidator.
 */
class BookValidator extends BaseValidator
{
    public function additionalRules(): array
    {
        $rules = [
            'title' => ['max:20', 'string'],
            'author' => ['max:20', 'string'],
            'description' => ['nullable', 'string'],
        ];
        $this->rules[ValidatorInterface::RULE_CREATE] = $rules;
        $this->rules[ValidatorInterface::RULE_UPDATE] = $rules;

        return $this->rules;
    }
}

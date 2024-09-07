<?php

namespace App\Rules;

use Closure;
use App\Models\User;
use Illuminate\Contracts\Validation\ValidationRule;

use function PHPUnit\Framework\isEmpty;
use function PHPUnit\Framework\isFalse;
use function PHPUnit\Framework\isNull;

class UniqueEmailRule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $user = User::where('email', $value)->first();
        if ($user && $user->token_activation->first()->is_active) {
            $fail('Email ini udah dipake. Coba yang lain!');
        }
    }
}

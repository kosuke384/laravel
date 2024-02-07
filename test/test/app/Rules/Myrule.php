<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class Myrule implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function __construct($n)
    {
        $this->num=$n;
    }
    public function passes($attribute,$value){
        return $value%$this->num==0;
    }

    public function message(){
        return $this->num.'で割り切れる値';
    }


    public function validate(string $attribute, mixed $value, Closure $fail): void
    {

    }
}

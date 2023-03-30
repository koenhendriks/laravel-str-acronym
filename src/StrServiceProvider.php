<?php

declare(strict_types=1);

namespace KoenHendriks\StrAcronym;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;
use Illuminate\Support\Stringable;

class StrServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Str::macro('acronym', function ($string, $delimiter = '') {
            if (empty($string)) {
                return '';
            }

            $acronym = '';
            foreach (preg_split('/[^a-zA-Z]+/', $string) as $word) {
                if(!empty($word)){
                    $acronym .= $word[0] . $delimiter;
                }
            }

            return $acronym;
        });

        Stringable::macro('acronym', function (string $delimiter = '') {
            return new Stringable (Str::acronym($this->value, $delimiter));
        });
    }
}

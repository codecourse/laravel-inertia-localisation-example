<?php

namespace App\Lang;

enum Lang: string
{
    case EN = 'en';
    case DE = 'de';

    public function label(): string
    {
        return match($this) {
            self::EN => 'English',
            self::DE => 'Deutsch',
        };
    }
}

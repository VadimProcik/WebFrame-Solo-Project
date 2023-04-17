<?php

namespace App\ProjectStuff;

use MyCLabs\Enum\Enum;

class Status extends Enum
{
    const PAID = 'PAID';
    const NOT_PAID = 'NOT PAID';
    const ASSEMBLED = 'ASSEMBLED';
    const FITTED = 'FITTED';
}


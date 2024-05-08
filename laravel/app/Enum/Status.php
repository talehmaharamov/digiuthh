<?php

namespace App\Enum;

use App\Traits\EnumParser;

enum Status: string
{
    use EnumParser;

    case STUDENT = 'student';

}

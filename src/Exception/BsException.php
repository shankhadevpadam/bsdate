<?php

declare(strict_types=1);

namespace Shankhadev\Bsdate\Exception;

use Exception;

final class BsException extends Exception
{
    public function __construct($message = '')
    {
        parent::__construct($message);
    }
}

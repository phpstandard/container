<?php

declare(strict_types=1);

namespace PhpStandard\Container\Exceptions;

use Exception;
use Psr\Container\ContainerExceptionInterface;

/** @package Framework\Container\Exceptions */
class ContainerException extends Exception implements
    ContainerExceptionInterface
{
}

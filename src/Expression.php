<?php
declare(strict_types=1);
namespace I3D;

interface Expression
{
    public function reduce(string $to): Money;
}

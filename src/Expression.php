<?php

declare(strict_types=1);

namespace I3D;

interface Expression
{
    public function plus(Expression $addend): ?Expression;
    public function reduce(Bank $bank, string $to): Money;
}

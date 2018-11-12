<?php
declare(strict_types=1);
namespace I3D;

class Dollar
{
    public $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): int
    {
        return $this->amount *= $multiplier;
    }
}

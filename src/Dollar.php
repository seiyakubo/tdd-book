<?php
declare(strict_types=1);
namespace I3D;

class Dollar
{
    private $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Dollar
    {
        return new Dollar($this->amount * $multiplier);
    }

    public function equals($dollar): bool
    {
        return $this->amount === $dollar->amount;
    }
}

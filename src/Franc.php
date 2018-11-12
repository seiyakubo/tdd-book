<?php
declare(strict_types=1);
namespace I3D;

class Franc
{
    private $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function times(int $multiplier): Franc
    {
        return new Franc($this->amount * $multiplier);
    }

    public function equals($franc): bool
    {
        return $this->amount === $franc->amount;
    }
}

<?php
declare(strict_types=1);
namespace I3D;

class Money
{
    protected $amount;

    public function equals(Money $money): bool
    {
        return $this->amount === $money->amount && get_class($this) === get_class($money);
    }
}

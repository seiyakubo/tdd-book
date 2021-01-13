<?php

declare(strict_types=1);

namespace I3D;

class Pair
{
    public function __construct(private string $from, private string $to)
    {
    }

    public function equals(object $object): bool
    {
        /** @var Pair */
        $pair = $object;
        return $this->from === $pair->from && $this->to === $pair->to;
    }

    public function hashCode(): int
    {
        return 0;
    }
}

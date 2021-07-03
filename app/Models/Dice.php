<?php

declare(strict_types=1);

namespace App\Models;

class Dice
{
    public $sides;
    public $lastroll;

    public function roll()
    {
        $this->lastroll = rand(1, $this->sides);

        return  $this->lastroll;
    }

    public function __construct(int $sides = 6)
    {
        $this->sides = $sides;
    }
}

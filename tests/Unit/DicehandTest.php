<?php

declare(strict_types=1);

namespace App\Models;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for the functions in src/functions.php.
 */
class DiceHandTest extends TestCase
{
    /**
     * Try to create the dice class.
     */
    public function testCreateDiceHandClass()
    {
        $dice = new DiceHand();
        $this->assertInstanceOf("\App\Models\DiceHand", $dice);
    }

    /**
     * Try to roll with the dice class.
     */
    public function testRollDiceHand()
    {
        $dice = new DiceHand();
        $dice->roll();
        $ans = $dice->average();
        $this->assertTrue($ans > 0);
    }
}

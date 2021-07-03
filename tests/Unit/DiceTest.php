<?php

declare(strict_types=1);

namespace App\Models;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for the functions in src/functions.php.
 */
class DiceTest extends TestCase
{
    /**
     * Try to create the dice class.
     */
    public function testCreateDiceClass()
    {
        $dice = new Dice();
        $this->assertInstanceOf("\App\Models\Dice", $dice);
    }
}

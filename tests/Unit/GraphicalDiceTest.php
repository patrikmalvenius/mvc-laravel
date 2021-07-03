<?php

declare(strict_types=1);

namespace App\Models;

use PHPUnit\Framework\TestCase;

/**
 * Test cases for the functions in src/functions.php.
 */
class GraphicalDiceTest extends TestCase
{
    /**
     * Try to create the dice class.
     */
    public function testCreateDiceClass()
    {
        $dice = new GraphicalDice();
        $this->assertInstanceOf("\App\Models\GraphicalDice", $dice);
    }

    /**
     * Verify graphic returns string.
     */
    public function testGraphicReturnsString()
    {
        $dice = new GraphicalDice();
        $ans = $dice->graphic();
        $this->assertStringContainsString("dice", $ans);
    }
}

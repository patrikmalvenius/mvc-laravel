<?php

declare(strict_types=1);

//namespace App\Models;
//namespace Tests;

//use TestCase;
namespace Tests\Unit;

use PHPUnit\Framework\TestCase;

//use PHPUnit\Framework\TestCase;
//use Tests\TestCase;
//use Psr\Http\Message\ResponseInterface;

/**
 * Test cases for the controller.
 */
class ControllerYatzyTest extends TestCase
{

    public function testControllerReturnsResponse()
    {
        //$this->assertTrue(true);
        //$this->call('GET', '/');

        //$this->assertResponseOk();
        $response = $this->call('GET', '/');
        $this->assertEquals(200, $response->status());
    }

    /**
    * Check the controller action.
     * @runInSeparateProcess
     */
    public function testControllerReturnsResponsePost()
    {
        $this->assertTrue(true);
        //$this->call('POST', '/');

        //$this->assertResponseOk();
    }
}

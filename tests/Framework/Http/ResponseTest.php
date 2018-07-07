<?php
/**
 * Created by PhpStorm.
 * User: Усиков
 * Date: 07.07.2018
 * Time: 16:28
 */

namespace Framework\Http;

use PHPUnit\Framework\TestCase;

class ResponseTest extends TestCase
{
    public function testEmpty()
    {
           $response = new Response($body = 'Body');
           self::assertEquals($body, $response->getBody());
           self::assertEquals(200, $response->getStatusCode());
           self::assertEquals('OK', $response->getReasonPhrase());
    }
}
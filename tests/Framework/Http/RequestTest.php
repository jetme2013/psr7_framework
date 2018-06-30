<?php
/**
 * Created by PhpStorm.
 * User: Усиков
 * Date: 30.06.2018
 * Time: 18:45
 */

namespace Tests\Framework\Http;

use PHPUnit\Framework\TestCase;
use Framework\Http\Request;

class RequestTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        $_POST =[];
        $_GET =[];
    }


    public function testEmpty(): void

    {
        $_GET = [];
        $_POST = [];
        $request = new Request();
        self::assertEquals([], $request->getQueryParams());
        self::assertNull($request->getParsedBody());
    }

    public function testQueryParams()
    {
        $_GET =$data =[
           'name'=>'John'
        ];
        $request = new Request();
        self::assertEquals($data, $request->getQueryParams());
        self::assertNull($request->getParsedBody());
    }
    
}
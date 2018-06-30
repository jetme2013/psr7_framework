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

    public function testEmpty(): void

    {
        $request = new Request();

        self::assertEquals([], $request->getQueryParams());
        self::assertNull($request->getParsedBody());
    }

    public function testQueryParams()
    {
        $request = (new Request())->withQueryParams($data=
            ['name'=>'John']);
        self::assertEquals($data, $request->getQueryParams());
        self::assertNull($request->getParsedBody());
    }

}
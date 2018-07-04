<?php
/**
 * Created by PhpStorm.
 * User: Усиков
 * Date: 04.07.2018
 * Time: 23:18
 */

namespace Framework\Http;


class RequestFactory
{
    public static function fromGlobals(array $query = null, $body = null): Request
    {
        return (new Request())
            ->withQueryParams($query ?: $_GET)
            ->withParsedBody($body ?: $_POST);
    }
}
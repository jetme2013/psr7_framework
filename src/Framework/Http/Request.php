<?php
/**
 * Created by PhpStorm.
 * User: Усиков
 * Date: 30.06.2018
 * Time: 17:10
 */
namespace Framework\Http;

class Request
{
    public function getQueryParams()
    {
        return $_GET;

    }
}
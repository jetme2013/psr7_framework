<?php
/**
 * Created by PhpStorm.
 * User: Усиков
 * Date: 09.07.2018
 * Time: 23:06
 */

namespace Framework\Http;


interface ServerRequestInterface
{
    public function withQueryParams(array $query);
    public function getQueryParams();
    public function withParsedBody($data);
    public function getParsedBody();
}
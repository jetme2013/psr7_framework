<?php
/**
 * Created by PhpStorm.
 * User: Усиков
 * Date: 09.07.2018
 * Time: 23:07
 */

namespace Framework\Http;


interface ResponseInterface
{
    public function getBody();
    public function getStatusCode(): int;
    public function withBody($body);
    public function withStatus($code, $reasonPharse = '');
    public function getStatusPhrase();
    public function getHeaders(): array;
    public function hasHeader($header): bool;
    public function withHeader($header, $value);
}
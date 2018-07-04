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
    private $queryParams;
    private $parsedBody;

    public function __construct(array $queryParams=[], $parsedBody = null)
    {
        $this->queryParams = $queryParams;
        $this->parsedBody = $parsedBody;
    }


    /**
     * так как нужно чтобы объект реквест был уникальным (например для разных параметров)
     * то он делается иммутабельным те создается через клон
     * @param array $query
     * @return Request
     */
    public function withQueryParams(array $query) :self
    {
        $new = clone $this;
        $new->queryParams = $query;
        return $new;
    }

    /**
     * @return array
     */
    public function getQueryParams()
    {
        return $this->queryParams;

    }

    /**
     * так как нужно чтобы объект реквест был уникальным (например для разных параметров)
     * то он делается иммутабельным те создается через клон
     * @param $data
     * @return Request
     */
    public function withParsedBody($data)
    {
        $new = clone $this;
        $new->parsedBody = $data;
        return $new;
    }

    /**
     * @return null
     */
    public function getParsedBody()
    {
        return $this->parsedBody;
    }
}
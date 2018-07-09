<?php
/**
 * Created by PhpStorm.
 * User: Усиков
 * Date: 07.07.2018
 * Time: 16:27
 */

namespace Framework\Http;


class Response implements ResponseInterface
{
    private $headers = [];
    private $body;
    private $statusCode;
    private $reasonPhrase;

    private static $phrases = [
        200 => 'OK',
        301 => 'moved permanently',
        404 => 'not found'
    ];

    public function __construct($body, $status = 200)
    {
        $this->body = $body;
        $this->statusCode = $status;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @return int
     */
    public function getStatusCode(): int
    {
        return $this->statusCode;
    }

    /**
     * @param $body
     * @return Response
     */
    public function withBody($body): self
    {
        $new = clone $this;
        $new->body = $body;
        return $new;
    }

    /**
     * @param $code
     * @param string $reasonPharse
     * @return Response
     */
    public function withStatus($code, $reasonPharse = ''): self
    {
        $new = clone $this;
        $new->statusCode = $code;
        $new->reasonPhrase = $reasonPharse;
        return $new;
    }

    /**
     * @return mixed|string
     */
    public function getStatusPhrase()
    {
        if (!isset($this->reasonPhrase) && isset(self::$phrases[$this->statusCode])) {
            $this->reasonPhrase = self::$phrases[$this->statusCode];
        }
        return $this->reasonPhrase;
    }

    /**
     * @return array
     */
    public function getHeaders(): array
    {
        return $this->headers;
    }

    /**
     * @param $header
     * @return bool
     */
    public function hasHeader($header): bool
    {
        return isset($this->headers[$header]);
    }

    /**
     * @param $header
     * @param $value
     * @return Response
     */
    public function withHeader($header, $value): self
    {
        $new = clone $this;
        if ($new->hasHeader($header)) {
            unset($new->headers[$header]);
        }
        $new->headers[$header] = $value;
        return $new;
    }
}
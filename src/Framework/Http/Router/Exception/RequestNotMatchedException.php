<?php

namespace Framework\Http\Router\Exception;


use LogicException;
use Psr\Http\Message\ServerRequestInterface;

class RequestNotMatchedException extends LogicException
{
    private $request;

    public function __construct($request)
    {
        parent::__construct("Match not found.");
        $this->request = $request;
    }

    public function getRequest() : ServerRequestInterface
    {
        return $this->request;
    }

}
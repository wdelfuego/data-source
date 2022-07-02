<?php

namespace Wdelfuego\DataSource;

abstract class AbstractDataSource
{
    abstract public function data() : array;
    
    private $request = null;
    
    public function request()
    {
        return $this->request;
    }
    
    public function withRequest($request)
    {
        $this->request = $request;
        return $this;
    }
    
    public function onButtonAction(string $buttonAction, string $buttonId = null)
    {
        return $this->data();
    }
}

<?php

namespace Wdelfuego\DataSource;

abstract class AbstractListDataSource extends AbstractDataSource
{
    public function data() : array
    {
        return [
            'title' => $this->title(),
            'items' => $this->items()
        ];
    }
    
    abstract public function title() : string;
    abstract public function items() : array;
}

<?php

namespace Wdelfuego\DataSource;

abstract class AbstractListDataSource extends AbstractDataSource
{
    public function data($translated = true) : array
    {
        return [
            'title' => $this->title($translated),
            'items' => $this->items($translated)
        ];
    }
    
    abstract public function title($translated = true) : string;
    abstract public function items($translated = true) : array;
    
    public function nonTranslatedItems() : array
    {
        return $this->items(false);
    }
}

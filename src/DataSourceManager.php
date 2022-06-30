<?php

namespace Wdelfuego\DataSource;

class DataSourceManager
{
    public static $dataSources = [];

    public static function dataSourceWithKey(string $key) : ?AbstractDataSource
    {
        return self::$dataSources[$key] ?? null;
    }

    protected static function registerDataSource(string $key, AbstractDataSource $dataSource)
    {
        self::$dataSources[$key] = $dataSource;
    }
        
    public static function registerDataSources(array $dataSources)
    {
        foreach($dataSources as $key => $dataSourceMaker)
        {
            if(!is_callable($dataSourceMaker))
            {
                throw new \InvalidArgumentException("Data source spec must be callable");
            }
            self::registerDataSource($key, $dataSourceMaker());
        }
    }
    
}

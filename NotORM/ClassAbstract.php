<?php
namespace NotORM;

// friend visibility emulation
abstract class ClassAbstract {
    public static $logClass;
    protected $connection, $driver, $structure, $cache;
    protected $notORM, $table, $primary, $rows, $referenced = array();

    protected $debug = false;
    protected $freeze = false;
    protected $rowClass = '\NotORM\Row';
    protected $jsonAsArray = false;

    protected function access($key, $delete = false) {
    }

}
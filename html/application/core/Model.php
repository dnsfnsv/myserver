<?php

namespace application\core;

abstract class Model
{

    public $db;

    public function __construct()
    {
        $this->db = new \application\lib\Db;
    }

}
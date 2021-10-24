<?php

namespace application\models;

class Workers extends \application\core\Model
{

    public function getWorkers()
    {
        $result = $this->db->row('SELECT * FROM workers');

        return $result;
    }

    public function getPostmen()
    {
        $result = $this->db->row('SELECT name, telephone FROM workers WHERE type = 2');

        return $result;
    }

    public function getClerks()
    {
        $result = $this->db->row('SELECT name, telephone FROM workers WHERE type = 1');

        return $result;
    }

}
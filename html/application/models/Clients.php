<?php

namespace application\models;

class Clients extends \application\core\Model
{

    public function getClients()
    {
        $result = $this->db->row(
            'SELECT cl.name, cl.telephone, COUNT(co.client_id) as contracts FROM clients cl JOIN contracts co ON cl.id = co.client_id GROUP BY cl.id'
        );

        return $result;
    }

}
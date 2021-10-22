<?php

namespace application\models;

class Main extends \application\core\Model
{

    public function getWorkers()
    {
        $result = $this->db->row('SELECT * FROM workers');

        return $result;
    }

    public function getClients()
    {
        $result = $this->db->row(
            'SELECT cl.name, cl.telephone, COUNT(co.client_id) as contracts FROM clients cl JOIN contracts co ON cl.id = co.client_id GROUP BY cl.id'
        );

        return $result;
    }

    public function getContracts()
    {
        $result = $this->db->row(
            '
		SELECT *,
		    w1.id as clerk_id, w1.name as clerk_name,
		    w2.id as postman_id, w2.name as postman_name,
			cl.id as client_id, cl.name as client_name
		FROM contracts c 
		JOIN workers w1 
        ON c.clerk_id = w1.id
	    JOIN workers w2 
        ON c.postman_id = w2.id
        JOIN clients cl 
        ON c.client_id = cl.id'
        );

        return $result;
    }

}
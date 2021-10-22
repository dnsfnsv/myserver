<?php

namespace application\controllers;

class ClientsController extends \application\core\Controller
{

    public function indexAction()
    {
        $result = $this->model->getClients();
        $vars   = [
            'clients' => $result,
        ];
        $this->view->render('Клиенты', $vars);
    }
}
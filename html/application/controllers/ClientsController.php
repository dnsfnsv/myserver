<?php

namespace application\controllers;

class ClientsController extends \application\core\Controller
{

    public function indexAction()
    {
        $clients = $this->model->getClients();
        $vars    = [
            'clients' => $clients,
        ];
        $this->view->render('Клиенты', $vars);
    }
}
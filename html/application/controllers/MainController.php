<?php

namespace application\controllers;

class MainController extends \application\core\Controller
{

    public function indexAction()
    {
        $workers   = $this->model->getWorkers();
        $clients   = $this->model->getClients();
        $contracts = $this->model->getContracts();
        $vars      = [
            'workers'   => $workers,
            'clients'   => $clients,
            'contracts' => $contracts,
        ];
        $this->view->render('Главная страница', $vars);
    }

}
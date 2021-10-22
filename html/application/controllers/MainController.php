<?php

namespace application\controllers;

class MainController extends \application\core\Controller
{

    public function indexAction()
    {
        $result1 = $this->model->getWorkers();
        $result2 = $this->model->getClients();
        $result3 = $this->model->getContracts();
        $vars    = [
            'workers'   => $result1,
            'clients'   => $result2,
            'contracts' => $result3,
        ];
        $this->view->render('Главная страница', $vars);
    }

}
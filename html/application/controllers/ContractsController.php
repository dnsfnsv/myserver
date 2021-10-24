<?php

namespace application\controllers;

class ContractsController extends \application\core\Controller
{

    public function indexAction()
    {
        $contracts = $this->model->getContracts();
        $vars      = [
            'contracts' => $contracts,
        ];
        $this->view->render('Договоры', $vars);
    }

}
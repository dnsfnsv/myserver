<?php

namespace application\controllers;

class ContractsController extends \application\core\Controller
{

    public function indexAction()
    {
        $result = $this->model->getContracts();
        $vars   = [
            'contracts' => $result,
        ];
        $this->view->render('Договоры', $vars);
    }

}
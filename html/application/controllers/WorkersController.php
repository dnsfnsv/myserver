<?php

namespace application\controllers;

class WorkersController extends \application\core\Controller
{

    public function indexAction()
    {
        $workers = $this->model->getWorkers();
        $vars    = [
            'workers' => $workers,
        ];
        $this->view->render('Сотрудники', $vars);
    }

    public function postmenAction()
    {
        $postmen = $this->model->getPostmen();
        $vars    = [
            'postmen' => $postmen,
        ];
        $this->view->render('Почтальоны', $vars);
    }

    public function clerksAction()
    {
        $clerks = $this->model->getClerks();
        $vars   = [
            'clerks' => $clerks,
        ];
        $this->view->render('Офисные сотрудники', $vars);
    }
}
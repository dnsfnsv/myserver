<?php

namespace application\controllers;

class WorkersController extends \application\core\Controller
{

    public function postmenAction()
    {
        $result = $this->model->getPostmen();
        $vars   = [
            'postmen' => $result,
        ];
        $this->view->render('Почтальоны', $vars);
    }

    public function clerksAction()
    {
        $result = $this->model->getClerks();
        $vars   = [
            'clerks' => $result,
        ];
        $this->view->render('Офисные сотрудники', $vars);
    }
}
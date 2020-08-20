<?php

class PortfolioController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new PortfolioModel;
    }

    public function action_index()
    {
        $data = [];
        $data['works'] = $this->model->all();
        $this->view->generateView('portfolio', 'template.view.php', $data);
    }
}
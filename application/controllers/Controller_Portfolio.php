<?php


class Controller_Portfolio extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->model = new Model_Portfolio;
    }

    public function action_index(){
        $data = [];
        $data['works'] = $this->model->all();
        $this->view->generateView('portfolio',
            'template_view.php', $data);
    }
}
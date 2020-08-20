<?php


class _PageController extends Controller
{
    public function action_index(){
        $this->view->generateView('homepage',
            'template_view.php');
    }

    public function action_contacts(){
        $this->view->generateView('contacts',
            'template_view.php');
    }

    public function action_about_us(){
        echo 'Hey I am About us page';
    }
}
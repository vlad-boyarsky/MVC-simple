<?php

class PageController extends Controller
{
    public function action_index(): void
    {
        $this->view->generateView('homepage', 'template.view.php');
    }

    public function action_contacts(): void
    {
        $this->view->generateView('contacts', 'contacts.view.php');
    }

    public function action_about_us(): void
    {
        echo 'About us page';
    }
}
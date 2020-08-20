<?php
class View
{
//    protected $templateView = 'template_view.php';

    public function generateView($contentView, $templateView, $data = []){

        include_once 'application/views/'.$templateView;
    }
}
<?php

class View
{

    public function generateView($contentView, $templateView, $data = [])
    {

        include_once 'application/views/' . $templateView;
    }
}
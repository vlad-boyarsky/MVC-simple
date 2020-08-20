<?php

class View
{

    public function generateView($contentView, $templateView, $data = []): void
    {
        include_once 'App/Views/' . $templateView;
    }
}
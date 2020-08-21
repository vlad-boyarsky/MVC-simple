<?php


class PortfolioModel
{
    public function all(): array
    {
        return [
            [
                'title' => 'Google',
                'url' => 'https://google.com',
                'description' => 'New Browser search system'
            ],
            [
                'title' => 'Facebook',
                'url' => 'https://facebook.com',
                'description' => 'Meet your friends'
            ]
        ];
    }
}
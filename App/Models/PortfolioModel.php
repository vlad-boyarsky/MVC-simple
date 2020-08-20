<?php


class PortfolioModel
{
    public function all(): array
    {
        return [
            [
                'title' => 'Google',
                'url' => 'https://google.com',
                'description' => 'We created searching system'
            ],
            [
                'title' => 'Facebook',
                'url' => 'https://facebook.com',
                'description' => 'We created social system'
            ]
        ];
    }
}
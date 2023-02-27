<?php

namespace App\Services\SportScore\Endpoints;


use App\Services\SportScore\Entitites\Sport;
use App\Services\SportScore\SportScoreService;
use Illuminate\Support\Collection;

class Sports extends BaseEndpoints
{
    public $services;

    public function __construct()
    {
        $this->services = new SportScoreService();
    }

    public function get()
    {
        return $this->transform(
            $this->services
            ->api
            ->get('/sports'),
            Sport::class
        );
    }
}

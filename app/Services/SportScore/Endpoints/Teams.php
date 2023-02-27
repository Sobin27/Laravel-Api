<?php

namespace App\Services\SportScore\Endpoints;

use App\Services\SportScore\Entitites\Sport;
use App\Services\SportScore\Entitites\Team;
use App\Services\SportScore\SportScoreService;
use Illuminate\Support\Collection;

class Teams extends BaseEndpoints
{
    public $services;
    private $sportId;

    public function __construct()
    {
        $this->services = new SportScoreService();
    }

    public function fromSport($sport)
    {
        $this->sportId = $sport instanceof  Sport ? $sport->id : $sport;

        return $this;
    }

    public function get()
    {
        return $this->transform(
            $this->services
                ->api
                ->get('/sports/'.$this->sportId.'/teams')
                ->json('data'),
            Team::class
        );
    }
}

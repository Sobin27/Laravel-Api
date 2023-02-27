<?php

namespace App\Services\SportScore\Endpoints;

use App\Services\SportScore\SportScoreService;
use Illuminate\Support\Collection;

class BaseEndpoints
{
    public $services;

    public function __construct()
    {
        $this->services = new SportScoreService();
    }

    protected function transform($json, $class): Collection
    {
        return collect($json)->map(fn ($sports) => new $class($sports));
    }
}

<?php

namespace App\Services\SportScore\Facades;

use App\Services\SportScore\SportScoreService;

class SportScore extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        return SportScoreService::class;
    }
}

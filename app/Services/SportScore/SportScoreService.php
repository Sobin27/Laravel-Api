<?php

namespace App\Services\SportScore;

use App\Services\SportScore\Endpoints\HasSports;
use App\Services\SportScore\Endpoints\HasTeams;
use Illuminate\Support\Facades\Http;

class SportScoreService
{
    use HasSports;
    use HasTeams;
    public $api;

    public function __construct()
    {
        $this->api = Http::withHeaders([
            'X-RapidAPI-Key' => '7f64c3f7cbmshad9ad7c435454fcp1ea5cfjsn7f6609a8d2d2',
            'X-RapidAPI-Host' => 'sportscore1.p.rapidapi.com',
        ])->baseUrl('https://sportscore1.p.rapidapi.com');
    }
}

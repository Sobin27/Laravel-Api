<?php

namespace App\Console\Commands;

use App\Services\SportScore\SportScoreService;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Http;

class playground extends Command
{
    protected $signature = 'play';

    protected $description = 'Playground command';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $service = New SportScoreService();
        $json = $service->teams()->fromSport(1)->get();

        dd($json);

        return 0;
    }
}

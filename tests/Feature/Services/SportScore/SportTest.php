<?php

test('', function (){
    $services = new \App\Services\SportScore\SportScoreService();

    $sports = $services->sports()->get();

    expect($sports)
    ->toBeInstanceOf(\Illuminate\Support\Collection::class)
    ->and($sports)
    ->toBeInstanceOf(\App\Services\SportScore\Entitites\Sport::class);
});


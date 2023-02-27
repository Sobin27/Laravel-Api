<?php

namespace App\Services\SportScore\Entitites;

class Sport
{
    public $id;
    public $name;
    public $slug;
    public $nameTranslactions;

    public function __construct($data)
    {
        $this->id = data_get($data, 'id');
        $this->name = data_get($data, 'name');
        $this->slug = data_get($data, 'slug');
        $this->nameTranslactions = data_get($data, 'nameTranslactions');
    }
}

<?php

namespace App\Services\SportScore\Entitites;

class Team
{
    public $id;
    public $name;
    public $slug;
    public $nameTranslactions;
    public $country;
    public $logo;
    public $sport;

    public function __construct($data)
    {
        $this->id = data_get($data, 'id');
        $this->name = data_get($data, 'name');
        $this->slug = data_get($data, 'slug');
        $this->nameTranslactions = data_get($data, 'nameTranslactions');
        $this->country = data_get($data, 'country');
        $this->logo = data_get($data, 'logo');
        $this->sport = new Sport(data_get($data, 'sport'));
    }
}

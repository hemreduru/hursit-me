<?php

namespace App\Repositories\Eloquent;

use App\Models\PersonalInfo;
use App\Repositories\Contracts\PersonalInfoRepositoryInterface;

class EloquentPersonalInfoRepository implements PersonalInfoRepositoryInterface
{
    public function getProfile()
    {
        return PersonalInfo::first();
    }

    protected $model;

    public function __construct(PersonalInfo $model)
    {
        $this->model = $model;
    }

    public function first()
    {
        return $this->model->first();
    }
}

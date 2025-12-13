<?php

namespace App\Repositories\Eloquent;

use App\Models\Experience;
use App\Repositories\Contracts\ExperienceRepositoryInterface;

class EloquentExperienceRepository implements ExperienceRepositoryInterface
{
    public function getAllOrdered()
    {
        return Experience::orderBy('start_date', 'desc')->get();
    }

    protected $model;

    public function __construct(Experience $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->orderBy('start_date', 'desc')->get();
    }
}

<?php

namespace App\Repositories\Eloquent;

use App\Models\Skill;
use App\Repositories\Contracts\SkillRepositoryInterface;

class EloquentSkillRepository implements SkillRepositoryInterface
{
    protected $model;

    public function __construct(Skill $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->with('usages')->orderBy('proficiency', 'desc')->get();
    }
}

<?php

namespace App\Repositories\Eloquent;

use App\Models\Blog;
use App\Repositories\Contracts\BlogRepositoryInterface;

class EloquentBlogRepository implements BlogRepositoryInterface
{
    protected $model;

    public function __construct(Blog $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->where('is_active', true)->orderBy('published_at', 'desc')->get();
    }

    public function getRecent($limit = 3)
    {
        return $this->model->orderBy('published_at', 'desc')->take($limit)->get();
    }

    public function findBySlug(string $slug)
    {
        return $this->model->where('slug', $slug)->firstOrFail();
    }
}

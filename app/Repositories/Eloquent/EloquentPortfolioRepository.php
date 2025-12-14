<?php

namespace App\Repositories\Eloquent;

use App\Models\Portfolio;
use App\Repositories\Contracts\PortfolioRepositoryInterface;

class EloquentPortfolioRepository implements PortfolioRepositoryInterface
{
    protected $model;

    public function __construct(Portfolio $model)
    {
        $this->model = $model;
    }

    public function all()
    {
        return $this->model->orderBy('sort_order')->get();
    }

    public function getFeatured($limit = 3)
    {
        return $this->model->where('is_active', true)
            ->orderBy('sort_order', 'asc')
            ->orderBy('created_at', 'desc')
            ->limit($limit)
            ->get();
    }

    public function findBySlug(string $slug)
    {
        return $this->model->where('slug->' . app()->getLocale(), $slug)
            ->orWhere('slug->en', $slug)
            ->firstOrFail();
    }
}

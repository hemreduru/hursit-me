<?php

namespace App\Repositories\Contracts;

interface PortfolioRepositoryInterface
{
    public function all();
    public function getFeatured($limit = 3);
    public function findBySlug(string $slug);
}

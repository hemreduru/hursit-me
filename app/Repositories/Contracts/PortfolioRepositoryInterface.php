<?php

namespace App\Repositories\Contracts;

interface PortfolioRepositoryInterface
{
    public function all();
    public function getFeatured($limit = 3);
}

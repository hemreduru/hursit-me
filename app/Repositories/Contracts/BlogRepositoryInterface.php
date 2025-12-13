<?php

namespace App\Repositories\Contracts;

interface BlogRepositoryInterface
{
    public function all();
    public function getRecent($limit = 3);
    public function findBySlug(string $slug);
}

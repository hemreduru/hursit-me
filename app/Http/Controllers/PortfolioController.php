<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\PortfolioRepositoryInterface;

class PortfolioController extends Controller
{
    protected $portfolioRepository;

    public function __construct(PortfolioRepositoryInterface $portfolioRepository)
    {
        $this->portfolioRepository = $portfolioRepository;
    }

    public function index()
    {
        $projects = $this->portfolioRepository->all();
        return view('portfolio.index', compact('projects'));
    }

    public function show($slug)
    {
        $project = $this->portfolioRepository->findBySlug($slug);
        return view('portfolio.show', compact('project'));
    }
}

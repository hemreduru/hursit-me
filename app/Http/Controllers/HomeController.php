<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\PersonalInfoRepositoryInterface;
use App\Repositories\Contracts\ExperienceRepositoryInterface;
use App\Repositories\Contracts\SkillRepositoryInterface;
use App\Repositories\Contracts\PortfolioRepositoryInterface;
use App\Repositories\Contracts\BlogRepositoryInterface;

class HomeController extends Controller
{
    protected $personalInfoRepository;
    protected $experienceRepository;
    protected $skillRepository;
    protected $portfolioRepository;
    protected $blogRepository;

    public function __construct(
        PersonalInfoRepositoryInterface $personalInfoRepository,
        ExperienceRepositoryInterface $experienceRepository,
        SkillRepositoryInterface $skillRepository,
        PortfolioRepositoryInterface $portfolioRepository,
        BlogRepositoryInterface $blogRepository
    ) {
        $this->personalInfoRepository = $personalInfoRepository;
        $this->experienceRepository = $experienceRepository;
        $this->skillRepository = $skillRepository;
        $this->portfolioRepository = $portfolioRepository;
        $this->blogRepository = $blogRepository;
    }

    public function index()
    {
        $personalInfo = $this->personalInfoRepository->first();
        $experiences = $this->experienceRepository->all();
        $skills = $this->skillRepository->all();
        // Categorize skills
        $backendSkills = $skills->where('category', 'backend');
        $frontendSkills = $skills->where('category', 'frontend');
        $devopsSkills = $skills->where('category', 'devops');

        $projects = $this->portfolioRepository->getFeatured(3); // Assuming implement getFeatured or just take 3
        if ($projects->isEmpty()) {
             $projects = $this->portfolioRepository->all()->take(3);
        }

        $posts = $this->blogRepository->getRecent(3); // Assuming implement getRecent or just take 3
         if ($posts->isEmpty()) {
             $posts = $this->blogRepository->all()->take(3);
        }

        return view('home', compact(
            'personalInfo',
            'experiences',
            'backendSkills',
            'frontendSkills',
            'devopsSkills',
            'skills',
            'projects',
            'posts'
        ));
    }
}

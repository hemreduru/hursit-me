<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contracts\BlogRepositoryInterface;

class BlogController extends Controller
{
    protected $blogRepository;

    public function __construct(BlogRepositoryInterface $blogRepository)
    {
        $this->blogRepository = $blogRepository;
    }

    public function index()
    {
        $posts = $this->blogRepository->all();
        return view('blog.index', compact('posts'));
    }

    public function show($slug)
    {
        $post = $this->blogRepository->findBySlug($slug);
        return view('blog.show', compact('post'));
    }
}

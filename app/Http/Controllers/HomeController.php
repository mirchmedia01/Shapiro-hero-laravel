<?php

namespace App\Http\Controllers;

use App\Services\BlogService;
use App\Services\SeoService;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct(
        protected BlogService $blogService,
        protected SeoService $seoService
    ) {}

    public function index(): View
    {
        $recentPosts = $this->blogService->getRecentPosts(3);

        $seo = $this->seoService->forPage(
            title: 'New York Personal Injury Attorney for Accident & Injury Claims | Shapiro',
            description: 'Injured in New York? Shapiro the Hero helps victims pursue compensation for car accidents, slip and falls, construction injuries, and workers’ compensation claims. Get your free consultation today.',
            canonicalUrl: url('/')
        );

        return view('pages.home', compact('recentPosts', 'seo'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Services\CompanyService;
use App\Services\ProjectService;
use App\Services\ServiceService;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function __construct(
        private readonly CompanyService $companyService,
        private readonly ProjectService $projectService,
        private readonly ServiceService $serviceService,
    ) {}

    /**
     * Display the landing / home page.
     */
    public function index(): View
    {
        return view('pages.home', [
            'company'         => $this->companyService->getCompanyInfo(),
            'stats'           => $this->companyService->getStats(),
            'awards'          => $this->companyService->getAwards(),
            'services'        => $this->serviceService->getAllServices(),
            'projects'        => $this->projectService->getFeaturedProjects(),
            'featuredProject' => $this->projectService->getFeaturedProjects()->firstWhere('featured', true),
        ]);
    }
}

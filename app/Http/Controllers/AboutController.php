<?php

namespace App\Http\Controllers;

use App\Services\CompanyService;
use Illuminate\View\View;

class AboutController extends Controller
{
    public function __construct(
        private readonly CompanyService $companyService,
    ) {}

    /**
     * Display the About page.
     */
    public function index(): View
    {
        return view('pages.about', [
            'company' => $this->companyService->getCompanyInfo(),
            'stats'   => $this->companyService->getStats(),
            'team'    => $this->companyService->getTeam(),
            'awards'  => $this->companyService->getAwards(),
        ]);
    }
}

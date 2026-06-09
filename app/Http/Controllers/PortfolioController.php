<?php

namespace App\Http\Controllers;

use App\Services\ProjectService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function __construct(
        private readonly ProjectService $projectService,
    ) {}

    public function index(Request $request): View
    {
        $category = $request->query('category');

        return view('pages.portfolio.index', [
            'projects'   => $this->projectService->getPaginatedProjects($category, perPage: 12),
            'categories' => $this->projectService->getCategories(),
        ]);
    }

    public function show(string $slug): View
    {
        $project = $this->projectService->getProjectBySlug($slug);

        abort_if(is_null($project), 404, 'Project not found.');

        return view('pages.portfolio.show', [
            'project'         => $project,
            'relatedProjects' => $this->projectService->getRelatedProjects($project['slug'], $project['service_slug']),
        ]);
    }
}
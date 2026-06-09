<?php

namespace App\Http\Controllers;

use App\Services\ProjectService;
use App\Services\ServiceService;
use Illuminate\Http\Response;
use Illuminate\View\View;

class ServiceController extends Controller
{
    public function __construct(
        private readonly ServiceService $serviceService,
        private readonly ProjectService $projectService,
    ) {}

    public function index(): View
    {
        return view('pages.services.index', [
            'services' => $this->serviceService->getAllServices(),
            'process'  => $this->serviceService->getProcess(),
        ]);
    }

    public function show(string $slug): View|Response
    {
        $service = $this->serviceService->getServiceBySlug($slug);

        abort_if(is_null($service), 404, 'Service not found.');

        return view('pages.services.show', [
            'service'         => $service,
            'relatedProjects' => $this->projectService->getProjectsByService($slug),
        ]);
    }
}
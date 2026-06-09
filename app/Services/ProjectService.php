<?php

namespace App\Services;

use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

/**
 * ProjectService
 *
 * Manages the portfolio project catalogue.
 * In a production app, replace the static data below with
 * Eloquent model calls: Project::with('service')->paginate().
 */
class ProjectService
{
    /**
     * Full project catalogue.
     */
    public function getAllProjects(): Collection
    {
        return collect([
            [
                'slug'         => 'the-apex-plaza',
                'title'        => 'The Apex Plaza',
                'category'     => 'COMMERCIAL SUPREME',
                'service_slug' => 'commercial',
                'featured'     => true,
                'image'        => 'apex-plaza.png',
                'description'  => 'A 62-storey mixed-use tower anchoring the central business district, featuring a cantilevered sky lobby and full seismic isolation system.',
                'year'         => 2022,
                'location'     => 'New York, USA',
            ],
            [
                'slug'         => 'emerald-heights',
                'title'        => 'Emerald Heights',
                'category'     => 'LUXURY RESIDENTIAL',
                'service_slug' => 'residential',
                'featured'     => false,
                'image'        => 'emerald-heights.png',
                'description'  => 'A premium residential tower delivering 340 luxury apartments with floor-to-ceiling glazing and rooftop amenity terrace.',
                'year'         => 2021,
                'location'     => 'London, UK',
            ],
            [
                'slug'         => 'harbor-connection',
                'title'        => 'Harbor Connection',
                'category'     => 'CIVIL INFRASTRUCTURE',
                'service_slug' => 'civil-engineering',
                'featured'     => false,
                'image'        => 'harbor-connection.png',
                'description'  => 'A 1.4 km long-span suspension bridge with a single concrete pylon, crossing a major estuary and connecting two industrial regions.',
                'year'         => 2020,
                'location'     => 'Rotterdam, Netherlands',
            ],
            [
                'slug'         => 'global-innovation-hub',
                'title'        => 'Global Innovation Hub',
                'category'     => 'INDUSTRIAL / COMMERCIAL',
                'service_slug' => 'commercial',
                'featured'     => false,
                'image'        => 'global-innovation-hub.png',
                'description'  => 'A 45,000 m² campus for a Fortune 500 technology company — designed for net-zero operation and LEED Platinum certification.',
                'year'         => 2023,
                'location'     => 'Singapore',
            ],
        ]);
    }

    /**
     * Return featured projects for the home page (e.g. 4 projects).
     */
    public function getFeaturedProjects(): Collection
    {
        return $this->getAllProjects()->take(4);
    }

    /**
     * Paginate projects, optionally filtered by category.
     */
    public function getPaginatedProjects(?string $category = null, int $perPage = 12): LengthAwarePaginator
    {
        $items = $this->getAllProjects();

        if ($category) {
            $items = $items->filter(
                fn ($p) => str($p['service_slug'])->is($category)
            )->values();
        }

        $page    = request()->get('page', 1);
        $slice   = $items->slice(($page - 1) * $perPage, $perPage)->values();

        return new LengthAwarePaginator(
            $slice,
            $items->count(),
            $perPage,
            $page,
            ['path' => request()->url(), 'query' => request()->query()]
        );
    }

    /**
     * Find a single project by slug.
     */
    public function getProjectBySlug(string $slug): ?array
    {
        return $this->getAllProjects()->firstWhere('slug', $slug);
    }

    /**
     * Return projects belonging to a specific service.
     */
    public function getProjectsByService(string $serviceSlug): Collection
    {
        return $this->getAllProjects()
            ->where('service_slug', $serviceSlug)
            ->take(3)
            ->values();
    }

    /**
     * Return related projects (same service, excluding current).
     */
    public function getRelatedProjects(string $currentSlug, string $serviceSlug): Collection
    {
        return $this->getAllProjects()
            ->where('service_slug', $serviceSlug)
            ->where('slug', '!=', $currentSlug)
            ->take(3)
            ->values();
    }

    /**
     * Unique project categories for filter tabs.
     */
    public function getCategories(): array
    {
        return $this->getAllProjects()
            ->pluck('category')
            ->unique()
            ->values()
            ->toArray();
    }
}

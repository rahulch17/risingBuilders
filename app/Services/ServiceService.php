<?php

namespace App\Services;

use Illuminate\Support\Collection;

/**
 * ServiceService
 *
 * Manages the construction service catalogue.
 * In a larger app this reads from a DB model (Service::all()).
 * The service layer keeps controllers thin and views dumb.
 */
class ServiceService
{
    /**
     * Full service catalogue.
     */
    public function getAllServices(): Collection
    {
        return collect([
            [
                'slug'              => 'commercial',
                'name'              => 'Commercial',
                'category_label'    => 'HIGH-RISE & CORPORATE',
                'featured'          => false,
                'short_description' => 'High-rise developments and corporate campuses designed for efficiency and architectural presence.',
                'full_description'  => 'Our Commercial division handles the full spectrum of large-scale development — from initial concept through structural certification. We bring together computational design, material science and decades of site experience to deliver commercial buildings that stand as city landmarks.',
                'highlights'        => ['Skyscraper Design', 'Seismic Retrofitting', 'Load-Bearing Optimisation'],
                'hero_image'        => 'commercial-hero.png',
                'detail_image'      => 'commercial-detail.png',
                'icon_svg'          => '<svg width="32" height="32" viewBox="0 0 32 32" fill="none"><rect x="4" y="4" width="24" height="24" rx="2" stroke="currentColor" stroke-width="2"/><path d="M4 12h24M12 4v24" stroke="currentColor" stroke-width="2"/></svg>',
            ],
            [
                'slug'              => 'residential',
                'name'              => 'Residential',
                'category_label'    => 'LUXURY & URBAN LIVING',
                'featured'          => true,
                'short_description' => 'Luxury estates and multi-unit complexes where architectural elegance meets rigorous structural integrity.',
                'full_description'  => 'Rising Builders\' Residential division combines aesthetic vision with engineering precision. We specialise in bespoke luxury estates, urban multi-family housing, and affordable developments that adhere to the highest structural standards.',
                'highlights'        => ['Bespoke Estates', 'Urban Multi-Family', 'Sustainable Materials'],
                'hero_image'        => 'residential-hero.png',
                'detail_image'      => 'residential-detail.png',
                'icon_svg'          => '<svg width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M16 4L4 14v14h8v-8h8v8h8V14L16 4z" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/></svg>',
            ],
            [
                'slug'              => 'civil-engineering',
                'name'              => 'Civil Engineering',
                'category_label'    => 'INFRASTRUCTURE & PUBLIC',
                'featured'          => false,
                'short_description' => 'Large-scale infrastructure including bridges, stadiums, and transportation hubs built for the next century.',
                'full_description'  => 'Our Civil Engineering team tackles the most demanding public infrastructure challenges. From suspension bridges to urban transit networks, we design systems that move people and freight safely for generations.',
                'highlights'        => ['Infrastructure Networks', 'Bridge Engineering', 'Public Structures'],
                'hero_image'        => 'civil-hero.png',
                'detail_image'      => 'civil-detail.png',
                'icon_svg'          => '<svg width="32" height="32" viewBox="0 0 32 32" fill="none"><path d="M4 28L16 4l12 24" stroke="currentColor" stroke-width="2" stroke-linejoin="round"/><path d="M8 20h16" stroke="currentColor" stroke-width="2"/></svg>',
            ],
        ]);
    }

    public function getProcess(): array
    {
        return [
            [
                'title'       => 'Initial Consultation',
                'description' => 'We meet with you to understand the project scope, site conditions, budget and timeline.',
            ],
            [
                'title'       => 'Feasibility & Design',
                'description' => 'Our engineers produce concept drawings, structural analysis and material specifications.',
            ],
            [
                'title'       => 'Permitting & Approvals',
                'description' => 'We manage all regulatory submissions, authority liaisons and code compliance reviews.',
            ],
            [
                'title'       => 'Construction & Oversight',
                'description' => 'On-site project management ensures every beam, joint and foundation meets our standards.',
            ],
            [
                'title'       => 'Certification & Handover',
                'description' => 'Final inspections, structural certification and documentation delivered to the client.',
            ],
        ];
    }
    public function getFeaturedServices(): Collection
{
    return $this->getAllServices()
        ->where('featured', true)
        ->values();
}
    public function getServiceBySlug(string $slug): ?array
    {
        return $this->getAllServices()->firstWhere('slug', $slug);
    }
}

<?php

namespace App\Services;

use Illuminate\Support\Collection;

class CompanyService
{
    /**
     * Core company information passed to views.
     */
    public function getCompanyInfo(): array
    {
        return [
            'name'         => config('app.company_name', 'Rising Builders'),
            'founded'      => 1990,
            'description'  => 'At Rising Builders, we don\'t just build structures; we engineer environments where progress lives. Founded on the principles of architectural rigor and material science, our firm has been at the forefront of the industry\'s most complex technical challenges for over 34 years.',
            'mission'      => 'Our mission is to deliver structural excellence on every project — from initial feasibility through final certification — with an unwavering commitment to safety, sustainability and client satisfaction.',
            'quote'        => 'Engineering is not just craft; it is the art of structural permanence.',
            'quote_author' => 'Director of Engineering',
        ];
    }

    /**
     * Animated stat counters shown in the About strip.
     */
    public function getStats(): array
    {
        return [
            ['value' => '34+',  'label' => 'YEARS OF EXCELLENCE'],
            ['value' => '450+', 'label' => 'PROJECTS COMPLETED'],
            ['value' => '12',   'label' => 'GLOBAL AWARDS'],
            ['value' => '100%', 'label' => 'SAFETY RECORD'],
        ];
    }

    /**
     * Industry awards & certifications.
     */
    public function getAwards(): array
    {
        return [
            [
                'name'     => 'National Infrastructure Gold Medal',
                'icon_svg' => '<svg width="32" height="32" viewBox="0 0 36 36" fill="none"><circle cx="18" cy="18" r="14" stroke="#c8a96e" stroke-width="2"/><path d="M18 8l2.5 5 5.5.8-4 3.9.9 5.5L18 20.7l-4.9 2.5.9-5.5-4-3.9 5.5-.8L18 8z" fill="#c8a96e"/></svg>',
            ],
            [
                'name'     => 'Global Design Excellence Award',
                'icon_svg' => '<svg width="32" height="32" viewBox="0 0 36 36" fill="none"><rect x="8" y="8" width="20" height="20" rx="2" stroke="#c8a96e" stroke-width="2"/><path d="M14 18l3 3 5-6" stroke="#c8a96e" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
            ],
            [
                'name'     => 'AISS Structural Innovation Prize',
                'icon_svg' => '<svg width="32" height="32" viewBox="0 0 36 36" fill="none"><polygon points="18,4 22,14 33,14 24,21 27,32 18,26 9,32 12,21 3,14 14,14" stroke="#c8a96e" stroke-width="2" fill="none"/></svg>',
            ],
            [
                'name'     => 'ISO 9001 Certified Firm',
                'icon_svg' => '<svg width="32" height="32" viewBox="0 0 36 36" fill="none"><circle cx="18" cy="18" r="14" stroke="#c8a96e" stroke-width="2"/><path d="M12 18h12M18 12v12" stroke="#c8a96e" stroke-width="2" stroke-linecap="round"/></svg>',
            ],
        ];
    }

    /**
     * Team members for the About page.
     */
    public function getTeam(): array
    {
        return [
            [
                'name'  => 'Jonathan Reed',
                'role'  => 'Director of Engineering',
                'bio'   => '28 years of structural engineering experience across 6 continents.',
                'photo' => 'engineer.jpg',
            ],
            [
                'name'  => 'Sarah Mitchell',
                'role'  => 'Head of Architecture',
                'bio'   => 'Award-winning architect specialising in sustainable high-rise design.',
                'photo' => 'architect.avif',
            ],
            [
                'name'  => 'David Park',
                'role'  => 'Civil Infrastructure Lead',
                'bio'   => 'Led landmark bridge and transportation projects in 12 countries.',
                'photo' => 'infrastructure lead.jpg',
            ],
        ];
    }
}

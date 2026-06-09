<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Services\ContactService;
use App\Services\ServiceService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function __construct(
        private readonly ContactService $contactService,
        private readonly ServiceService $serviceService,
    ) {}

    /**
     * Display the contact page.
     */
    public function index(): View
    {
        return view('pages.contact.index', [
            'contactInfo' => $this->contactService->getContactInfo(),
            'services'    => $this->serviceService->getAllServices(),
        ]);
    }

    /**
     * Handle the contact form submission.
     */
    public function store(ContactRequest $request): RedirectResponse
    {
        $this->contactService->submitInquiry($request->validated());

        return redirect()
            ->route('contact.index')
            ->with('success', 'Thank you! Your message has been received. Our team will be in touch within 24 hours.');
    }
}

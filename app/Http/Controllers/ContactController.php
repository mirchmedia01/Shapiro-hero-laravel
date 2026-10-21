<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Services\ContactService;
use App\Services\SeoService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function __construct(
        protected ContactService $contactService,
        protected SeoService $seoService
    ) {}

    public function index(): View
    {
        $seo = $this->seoService->forPage(
            title: 'Contact Shapiro Personal Injury Lawyer Queens (718) 261-8500',
            description: 'Get in touch with Shapiro the Hero in New York for guidance on your personal injury matters. Call 970 742-7476 or connect via our online form. Available for urgent cases. No fee unless we win.',
            canonicalUrl: url('/contact-us/')
        );

        return view('pages.contact', compact('seo'));
    }

    public function submit(ContactRequest $request): RedirectResponse
    {
        $this->contactService->handleSubmission($request->validated(), $request);

        return redirect()
            ->route('contact')
            ->with('success', 'Thank you! Your case evaluation request has been submitted successfully. An attorney will contact you shortly.');
    }
}

<?php

namespace App\Http\Controllers;

use App\Services\BlogService;
use App\Services\SeoService;
use Illuminate\View\View;

class PageController extends Controller
{
    public function __construct(
        protected SeoService $seoService,
        protected BlogService $blogService
    ) {}

    public function about(): View
    {
        $seo = $this->seoService->forPage(
            title: 'About Adam L.Shapiro Personal Injury Attorney Since 1994 Shapiro',
            description: 'Attorney Adam L. Shapiro has been fighting for New York & Florida injury victims since 1994. Former defense attorney for Lloyds of London and Harley Davidson — now exclusively on your side. Free consultation.'
        );

        return view('pages.about', compact('seo'));
    }

    public function services(): View
    {
        $seo = $this->seoService->forPage(
            title: 'Personal Injury Practice Areas | NY Accident Lawyer | Shapiro',
            description: 'At Shapiro the Hero, we fight for injury victims across New York. Practice areas include car accidents, construction accidents, slip & fall, workers\' comp, medical malpractice, and wrongful death. Free consultation — no fee unless we win.'
        );

        return view('pages.services', compact('seo'));
    }

    public function personalInjury(): View
    {
        $seo = $this->seoService->forPage(
            title: 'Personal Injury Lawyer NYC & Queens NY | Catastrophic, Spinal Cord & Brain Injury',
            description: 'Shapiro is a trusted personal injury lawyer in NYC, Forest Hills, and Queens, NY, serving catastrophic, spinal cord, brain and serious injury victims with experienced legal representation and personalized support.'
        );

        return view('pages.practice.personal-injury', compact('seo'));
    }

    public function motorVehicle(): View
    {
        $seo = $this->seoService->forPage(
            title: 'Car, Truck & Motorcycle Accident Lawyer New York | NYC Accident Attorney',
            description: 'Need a car or motorcycle accident lawyer in New York? Our NYC accident attorneys handle truck, motorcycle, rideshare, and pedestrian accident claims, helping injured clients pursue compensation after serious crashes.'
        );

        return view('pages.practice.motor-vehicle', compact('seo'));
    }

    public function slipTripFall(): View
    {
        $seo = $this->seoService->forPage(
            title: 'Slip and Fall Lawyer NYC | Premises Liability Attorney New York | Shapiro',
            description: 'Shapiro is a trusted slip and fall attorney New York serving injury victims with experienced representation. Our slip and fall lawyer in NYC handles premises liability claims.'
        );

        return view('pages.practice.slip-trip-fall', compact('seo'));
    }

    public function workersCompensation(): View
    {
        $seo = $this->seoService->forPage(
            title: 'Workers’ Compensation Lawyer NYC | Injured on the Job | Shapiro',
            description: 'Need a Workers’ Compensation Lawyer NYC? Shapiro helps injured workers pursue medical, wage and disability benefits, handle denied claims and appeals, and investigate third-party liability. Free consultation. No fee unless we win.'
        );

        return view('pages.practice.workers-compensation', compact('seo'));
    }

    public function medicalMalpractice(): View
    {
        $seo = $this->seoService->forPage(
            title: 'Medical Malpractice Lawyer NYC | Surgical Errors & Hospital Negligence | Shapiro',
            description: 'Need a Medical Malpractice Lawyer NYC? Shapiro handles surgical errors, hospital negligence, misdiagnosis, birth injuries, and medical malpractice claims, helping injured clients pursue compensation throughout New York.'
        );

        return view('pages.practice.medical-malpractice', compact('seo'));
    }

    public function wrongfulDeath(): View
    {
        $seo = $this->seoService->forPage(
            title: 'Wrongful Death Attorney in New York | Need a Hero? Call Shapiro!',
            description: 'Wrongful Death Attorney New York helping families pursue compensation for funeral expenses, lost income, and family support. Shapiro offers a free consultation with no fee unless we win.'
        );

        return view('pages.practice.wrongful-death', compact('seo'));
    }

    public function constructionAccident(): View
    {
        $seo = $this->seoService->forPage(
            title: 'Construction Accident Lawyer NYC | Labor Law 240 & 241 Claims | Shapiro',
            description: 'Injured in a NYC construction accident? Shapiro the Hero handles construction injury claims involving scaffolds, ladders, machinery, falls, and New York Labor Laws 240 and 241.'
        );

        return view('pages.practice.construction-accident', compact('seo'));
    }

    public function ebikeScooter(): View
    {
        $seo = $this->seoService->forPage(
            title: 'E-Bike & Electric Scooter Accident Lawyer NYC | Shapiro',
            description: 'Injured in an e-bike or electric scooter accident in NYC? Shapiro the Hero helps victims pursue compensation for serious injuries, medical expenses, and accident-related losses. Free consultation.'
        );

        return view('pages.practice.ebike-scooter', compact('seo'));
    }

    public function highProfileCases(): View
    {
        $seo = $this->seoService->forPage(
            title: 'High Profiles Cases | Shapiro The Hero',
            description: 'High Profiles Cases: Mr. Shapiro has successfully handled many high profile and news worthy cases and matters of public interest.'
        );

        return view('pages.high-profiles-cases', compact('seo'));
    }

    public function awards(): View
    {
        $seo = $this->seoService->forPage(
            title: 'Awards & Recognition | Need a Hero? Call Shapiro!',
            description: 'See the awards and recognition earned by Shapiro the Hero for dedication in New York personal injury law. Our achievements reflect results.'
        );

        return view('pages.awards', compact('seo'));
    }

    public function career(): View
    {
        $seo = $this->seoService->forPage(
            title: 'Career for Shapiro The Hero',
            description: 'Searching For A Professional Law Firm? Book Consultation Now. A Reputation Backed by National Recognition and Client Success.'
        );

        return view('pages.career', compact('seo'));
    }

    public function disclaimer(): View
    {
        $seo = $this->seoService->forPage(
            title: 'Disclaimer provided by the law firm Shapiro The Hero',
            description: 'Disclaimer Shapiro The Hero refers to the disclaimer provided by the law firm of Adam L. Shapiro, which uses the marketing slogan "Need a Hero? Call Shapiro!".'
        );

        return view('pages.disclaimer', compact('seo'));
    }

    public function privacyPolicy(): View
    {
        $seo = $this->seoService->forPage(
            title: 'Privacy Policy | Shapiro The Hero',
            description: 'Privacy Policy : Adam L. Shapiro & Associates focuses on Accident and Injury claims, Worker’s Compensation Matters.'
        );

        return view('pages.privacy-policy', compact('seo'));
    }

    public function termsConditions(): View
    {
        $seo = $this->seoService->forPage(
            title: 'Terms & Conditions | Shapiro The Hero',
            description: 'Terms & Conditions: You need to consult an attorney in person for legal advice regarding your individual situation Call Shapirothehero.'
        );

        return view('pages.terms-conditions', compact('seo'));
    }

    public function attorneyAdvertising(): View
    {
        $seo = $this->seoService->forPage(
            title: 'Attorney Advertising | Shapiro The Hero',
            description: 'Attorney Advertising | Shapiro The Hero. You need to consult an attorney in person for legal advice regarding your individual situation.'
        );

        return view('pages.attorney-advertising', compact('seo'));
    }

    public function references(): View
    {
        $seo = $this->seoService->forPage(
            title: 'References & Recommendations | Shapiro The Hero',
            description: 'References & Recommendations : used Mr. Shapiro multiple times and found his professionalism and attention to details to be excellent.'
        );

        return view('pages.references-recommendations', compact('seo'));
    }
}

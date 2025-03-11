<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Testimoni;
use App\Models\Berita;
use App\Models\Portofolio;
use App\Models\Contact;
use Carbon\Carbon;

class Dashboard extends Controller
{
    public function index()
    {
        $serviceCount = Service::count();
        $testimoniCount = Testimoni::count();
        $beritaCount = Berita::count();
        $portofolioCount = Portofolio::count();
        $contactCount = Contact::count();

        $latestServices = Service::latest()->take(5)->get();
        $latestTestimonials = Testimoni::latest()->take(5)->get();
        $latestNews = Berita::latest()->take(5)->get();
        $latestPortfolios = Portofolio::latest()->take(5)->get();
        $latestContacts = Contact::latest()->take(5)->get();

        return view('dashboard', compact(
            'serviceCount',
            'testimoniCount',
            'beritaCount',
            'portofolioCount',
            'contactCount',
            'latestServices',
            'latestTestimonials',
            'latestNews',
            'latestPortfolios',
            'latestContacts'
        ));
    }
}

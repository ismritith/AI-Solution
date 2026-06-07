<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Event;
use App\Models\Inquiry;
use App\Models\Project;
use App\Models\Service;

class DashboardController extends Controller
{
    public function index()
    {
        $inquiriesCount = Inquiry::count();
        $eventsCount = Event::count();
        $blogsCount = BlogPost::count();
        $projectsCount = Project::count();
        $servicesCount = Service::count();

        // Latest inquiries
        $latestInquiries = Inquiry::latest()->limit(5)->get();

        return view('Front.pages.admin_dashboard', compact(
            'inquiriesCount',
            'eventsCount',
            'blogsCount',
            'projectsCount',
            'servicesCount',
            'latestInquiries'
        ));
    }
}

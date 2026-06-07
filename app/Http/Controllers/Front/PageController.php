<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\BlogPost;
use App\Models\Event;
use App\Models\GalleryAsset;
use App\Models\Project;
use App\Models\Service;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    /**
     * Render the Home / Welcome page.
     */
    public function home()
    {
        $services = Service::latest()->take(6)->get();
        $posts = BlogPost::where('status', 'published')->latest()->take(2)->get();
        $featuredEvent = Event::latest()->first();
        $testimonials = Testimonial::latest()->get();

        return view('welcome', compact('services', 'posts', 'featuredEvent', 'testimonials'));
    }

    /**
     * Render the About Us & Capabilities page.
     */
    public function about()
    {
        $testimonials = Testimonial::latest()->get();
        $services = Service::latest()->get();

        return view('Front.pages.about', compact('testimonials', 'services'));
    }

    /**
     * Render the Visual Neural Gallery page.
     */
    public function gallery()
    {
        $assets = GalleryAsset::latest()->get();

        return view('Front.pages.gallery', compact('assets'));
    }

    /**
     * Render the Insights / Blog Hub page.
     */
    public function insights()
    {
        $posts = BlogPost::where('status', 'published')->latest()->paginate(9);

        return view('Front.pages.insights', compact('posts'));
    }

    /**
     * Render the single Insight/Blog Detail page.
     */
    public function insights1(Request $request)
    {
        $id = $request->query('id');
        $post = BlogPost::find($id) ?? BlogPost::where('status', 'published')->first();

        $recentPosts = [];
        if ($post) {
            $recentPosts = BlogPost::where('status', 'published')
                ->where('id', '!=', $post->id)
                ->latest()
                ->take(3)
                ->get();
        }

        return view('Front.pages.insights1', compact('post', 'recentPosts'));
    }

    /**
     * Render the Global AI Events page.
     */
    public function events()
    {
        $events = Event::latest()->get();

        return view('Front.pages.events', compact('events'));
    }

    /**
     * Render the single Event Detail page.
     */
    public function event1(Request $request)
    {
        $id = $request->query('id');
        $event = Event::find($id) ?? Event::first();

        return view('Front.pages.event1', compact('event'));
    }

    /**
     * Render the registration form.
     */
    public function register_form()
    {
        return view('Front.pages.register_form');
    }

    /**
     * Render the Contact Form & direct nodes page.
     */
    public function contact()
    {
        return view('Front.pages.contact');
    }

    /**
     * Render the Services index page.
     */
    public function services()
    {
        $infrastructureServices = Service::where('category', 'infrastructure')->latest()->get();
        $verticalServices = Service::where('category', 'vertical')->latest()->get();
        $stepServices = Service::where('category', 'step')->orderBy('step_number')->get();

        return view('Front.pages.services', compact('infrastructureServices', 'verticalServices', 'stepServices'));
    }

    public function projects()
    {
        $featuredProjects = Project::where('classification', 'featured')->latest()->get();
        $presentProjects = Project::where('classification', 'present')->latest()->get();
        $legacyProjects = Project::where('classification', 'legacy')->latest()->get();
        $horizonProjects = Project::where('classification', 'horizon')->latest()->get();
        $testimonials = Testimonial::latest()->get();

        return view('Front.pages.projects', compact('featuredProjects', 'presentProjects', 'legacyProjects', 'horizonProjects', 'testimonials'));
    }

    /**
     * Render the single Project Detail page.
     */
    public function projects1(Request $request)
    {
        $id = $request->query('id');
        $project = Project::find($id) ?? Project::first();

        return view('Front.pages.projects1', compact('project'));
    }

    public function admin_login()
    {
        if (Auth::check()) {
            return redirect()->route('admin.dashboard');
        }

        return view('Front.pages.admin_login');
    }

    /**
     * Handle admin login request.
     */
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            session(['admin_last_activity' => time()]);

            return redirect()->intended(route('admin.dashboard'));
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }

    /**
     * Handle admin logout request.
     */
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        $request->session()->forget(['admin_last_activity']);

        return redirect()->route('admin.login');
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Render the Home / Welcome page.
     */
    public function home()
    {
        return view('welcome');
    }

    /**
     * Render the About Us & Capabilities page.
     */
    public function about()
    {
        return view('Front.pages.about');
    }

    /**
     * Render the Visual Neural Gallery page.
     */
    public function gallery()
    {
        return view('Front.pages.gallery');
    }

    /**
     * Render the Insights / Blog Hub page.
     */
    public function insights()
    {
        return view('Front.pages.insights');
    }

    /**
     * Render the Global AI Events page.
     */
    public function events()
    {
        return view('Front.pages.events');
    }

    /**
     * Render the Contact Form & direct nodes page.
     */
    public function contact()
    {
        return view('Front.pages.contact');
    }
}

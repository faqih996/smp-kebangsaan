<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Article;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Extracurricular;
use App\Models\Facility;
use App\Models\Gallery;
use App\Models\Information;
use App\Models\Mision;
use App\Models\Promotion;
use App\Models\SocialMedia;
use App\Models\Speach;
use App\Models\Teacher;
use App\Models\Vision;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $about = About::first();

        $carousels = Carousel::where('is_active', 'active')
        ->inRandomOrder()
        ->take(5)
        ->get();

        $socmeds = SocialMedia::orderByDesc('id')->get();
        $contacts = Contact::orderByDesc('id')->get();

        $featured_articles = Article::orderByDesc('id')->with(['Category'])
        ->where('is_featured', 'featured')
        ->inRandomOrder()
        ->get();

        $articles = Article::with(['Category'])
        ->where('is_featured', 'not_featured')
        ->latest()
        ->take(3)
        ->get();

        $article = Article::count();

        $informations = Information::orderByDesc('id')->get();
        $information = Information::count();

        $promotions = Promotion::orderByDesc('id')->get();
        $promotion = Promotion::count();

        $galleries = Gallery::where('is_active', 'active')->orderByDesc('id')->get();

        $contact = Contact::count();
        $categories = Category::count();
        $teachers = Teacher::count();
        $facilities = Facility::count();
        $extracurriculars = Extracurricular::count();

        return view('frontend.index', compact('user',
            'about', 'contacts', 'socmeds',
            'promotion', 'articles', 'article', 'informations',
            'galleries', 'featured_articles', 'promotions', 'extracurriculars', 'carousels', 'information', 'contact', 'categories', 'article', 'user', 'information', 'teachers', 'facilities', 'promotions'
        ));
    }

    public function about()
    {
        $user = Auth::user();
        $about = About::first();

        $socmeds = SocialMedia::orderByDesc('id')->get();

        return view('frontend.about', compact('user', 'about', 'socmeds'));
    }

    public function visimision()
    {
        $user = Auth::user();
        $about = About::first();
        $vision = Vision::first();
        $missions = Mision::orderBy('id', 'asc')->get();

        $socmeds = SocialMedia::orderByDesc('id')->get();

        return view('frontend.visimision', compact('about', 'socmeds', 'user', 'vision', 'missions'));
    }

    public function greeting()
    {
        $user = Auth::user();
        $about = About::first();
        $greeting = Speach::first();

        $socmeds = SocialMedia::orderByDesc('id')->get();

        return view('frontend.greeting', compact('user', 'about', 'socmeds', 'greeting'));
    }

    public function teacher()
    {
        $user = Auth::user();
        $about = About::first();
        $teachers = Teacher::orderByDesc('id')->get();

        $socmeds = SocialMedia::orderByDesc('id')->get();

        return view('frontend.teacher', compact('user', 'about', 'socmeds', 'teachers'));
    }

    public function facility()
    {
        $user = Auth::user();
        $about = About::first();
        $facilities = Facility::orderByDesc('id')->get();

        $socmeds = SocialMedia::orderByDesc('id')->get();

        return view('frontend.facility', compact('user', 'about', 'socmeds', 'facilities'));
    }

    public function extracurricular()
    {
        $user = Auth::user();
        $about = About::first();
        $socmeds = SocialMedia::orderByDesc('id')->get();

        $extracurriculars = Extracurricular::orderByDesc('id')->get();

        return view('frontend.extracurricular', compact('user', 'about', 'socmeds', 'extracurriculars'));
    }

    public function information()
    {
        $user = Auth::user();
        $about = About::first();
        $socmeds = SocialMedia::orderByDesc('id')->get();

        return view('frontend.information', compact('user', 'about', 'socmeds'));
    }

    public function gallery()
    {
        $user = Auth::user();
        $about = About::first();
        $socmeds = SocialMedia::orderByDesc('id')->get();

        $galleries = Gallery::orderByDesc('id')->get();

        return view('frontend.gallery', compact('user', 'about', 'socmeds', 'galleries'));
    }

    public function article()
    {
        $user = Auth::user();
        $about = About::first();
        $socmeds = SocialMedia::orderByDesc('id')->get();

        return view('frontend.article', compact('user', 'about', 'socmeds'));
    }
}
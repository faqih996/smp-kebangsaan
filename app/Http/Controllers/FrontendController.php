<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Article;
use App\Models\Carousel;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Extracurricular;
use App\Models\Facility;
use App\Models\Information;
use App\Models\Promotion;
use App\Models\SocialMedia;
use App\Models\Teacher;
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

        $contact = Contact::count();
        $categories = Category::count();
        $teachers = Teacher::count();
        $facilities = Facility::count();
        $extracurriculars = Extracurricular::count();

        return view('frontend.index', compact('user', 'about', 'contacts', 'socmeds', 'articles', 'article', 'informations',
            'featured_articles','promotions', 'extracurriculars', 'carousels', 'information', 'contact', 'categories', 'article', 'user', 'information', 'teachers', 'facilities', 'promotions'
        ));
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function visimision()
    {
        return view('frontend.visimision');
    }

    public function greeting()
    {
        return view('frontend.greeting');
    }

    public function teacher()
    {
        return view('frontend.teacher');
    }

    public function facility()
    {
        return view('frontend.facility');
    }

    public function extracurricular()
    {
        return view('frontend.extracurricular');
    }

    public function information()
    {
        return view('frontend.information');
    }

    public function gallery()
    {
        return view('frontend.gallery');
    }

    public function article()
    {
        return view('frontend.article');
    }
}
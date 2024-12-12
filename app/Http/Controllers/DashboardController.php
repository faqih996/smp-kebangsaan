<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Article;
use App\Models\Category;
use App\Models\Contact;
use App\Models\Facility;
use App\Models\Information;
use App\Models\Promotion;
use App\Models\SocialMedia;
use App\Models\Teacher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $about = About::first();

        $socmeds = SocialMedia::orderByDesc('id')->get();
        $contacts = Contact::orderByDesc('id')->get();

        $articles = Article::orderByDesc('id')->get();
        $article = Article::count();

        $informations = Information::orderByDesc('id')->get();
        $information = Information::count();

        $contact = Contact::count();
        $categories = Category::count();
        $teachers = Teacher::count();
        $facilities = Facility::count();
        $promotions = Promotion::count();

        return view('admin.index', compact('contacts', 'socmeds', 'teachers', 'about', 'facilities', 'articles', 'promotions', 'informations', 'contact', 'categories', 'article', 'user', 'information'));
    }

    public function profile()
    {
        return view('profile.show');
    }
}
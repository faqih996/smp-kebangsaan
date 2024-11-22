<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('frontend.index');
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
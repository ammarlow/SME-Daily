<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{

    protected $language;

    public function __construct(Request $request)
    {
        if($request->input('language')){
            $this->language = $request->input('language');
        }else{
            $this->language = 'us';
        }
    }

    public function index(Request $request)
    {
        $language = $this->language;

        return view('home.home', compact('language'));
    }

    public function vos(Request $request)
    {
        $language = $this->language;

        return view('home.vos', compact('language'));
    }

    public function events(Request $request)
    {
        $language = $this->language;

        return view('home.events', compact('language'));
    }

    public function news(Request $request)
    {
        $language = $this->language;

        return view('home.news', compact('language'));
    }

    public function vosmore(Request $request)
    {
        $language = $this->language;

        return view('home.vosmore', compact('language'));
    }

    public function more(Request $request)
    {
        $language = $this->language;

        return view('home.more', compact('language'));
    }

    public function indepth(Request $request)
    {
        $language = $this->language;

        return view('home.indepth', compact('language'));
    }

    public function eventmore(Request $request)
    {
        $language = $this->language;

        return view('home.eventmore', compact('language'));
    }

    public function sign(Request $request)
    {
        $language = $this->language;

        return view('login.sign', compact('language'));
    }
}

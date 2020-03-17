<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\post;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $posts = post::paginate(12);
        return view('admin/home',compact('posts'));
    }

    public function welcome()
    {
        return view('admin/welcome');
    }
}

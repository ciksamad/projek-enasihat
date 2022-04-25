<?php

namespace App\Http\Controllers;

use App\Models\Temujanji;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $temujanjis=Temujanji::latest()->get();
        return view('admin',compact('temujanjis'));
    }

}

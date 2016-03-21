<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Yuansir\Toastr\Facades\Toastr;

class HomeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        Toastr::info('welcome!', $title = 'good guy', $options = []);
        return view('home');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Topics;
use Yuansir\Toastr\Facades\Toastr;

class HomeController extends Controller
{

    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = Topics::orderBy('id','desc')->paginate(10);
        Toastr::info('welcome!');
        return view('home',compact('topics'));
    }
}

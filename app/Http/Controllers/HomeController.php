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
        $topics = Topics::orderBy('id', 'desc')->paginate(12);
        foreach ($topics as $topic) {
            $topic->content = left($topic->content, 100);
        }
        return view('home', compact('topics'));
    }

    public function flarum()
    {
        return redirect(env('SUB_DOMAIN'));
    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Topics;

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
        $hot_topics = Topics::select('id', 'title')->orderBy('view_count', 'desc')->limit(5)->get();
        return view('home', compact('topics', 'hot_topics'));
    }

    public function flarum()
    {
        return redirect(env('SUB_DOMAIN'));
    }


}

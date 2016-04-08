<?php

namespace App\Http\Controllers;

use App\Models\Topics;
use App\Http\Requests;
use \Parsedown;
use \Request;
use \Auth;

class TopicsController extends Controller
{

    /**
     * TopicsController constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
        $topics = Topics::paginate(10);
        return view('home',compact('topics'));
    }

    public function show($id,Parsedown $markdown)
    {
        $topic = Topics::findOrfail($id);
        $topic->content = $markdown->text($topic->content);
        return view('topics.show',compact('topic'));
    }

    public function create()
    {

    }

    public function store(Request $request,Auth $auth)
    {
        $data = $request->only(array('title','content','type_id','sort_id'));
        $data['user_id'] = $auth->user()->id;
    }

    public function edit($id)
    {

    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}

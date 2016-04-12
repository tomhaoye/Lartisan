<?php

namespace App\Http\Controllers;

use App\Models\Topics;
use App\Models\TopicsSort;
use App\Models\TopicsType;
use Illuminate\Support\Facades\Redirect;
use \Parsedown;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $topics = Topics::paginate(12);
        foreach($topics as &$topic){
            $topic->content = mb_substr($topic->cotnent,20);
        }
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
        $sort = TopicsSort::all();
        $type = TopicsType::all();
        return view('topics.create',compact('type','sort'));
    }

    public function store(Request $request)
    {
        // todo with laravel5.2 new validation & image upoload
        $data = $request->only(array('title','content','type_id','sort_id'));
        $data['user_id'] = Auth::user()->id;
        $topic = Topics::create($data);
        return redirect('/topic/'.$topic->id);
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

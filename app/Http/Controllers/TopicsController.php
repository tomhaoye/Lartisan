<?php

namespace App\Http\Controllers;

use App\Models\Topics;
use App\Models\TopicsSort;
use App\Models\TopicsType;
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
        foreach ($topics as &$topic) {
            $topic->content = mb_substr($topic->cotnent, 20);
        }
        return view('home', compact('topics'));
    }

    public function show($id, Parsedown $markdown)
    {
        $topic = Topics::with('comments.user')
            ->whereId($id)
            ->first();
        if (empty($topic)) abort(404);

        $topic->content = $markdown->text($topic->content);
        foreach ($topic->comments as $comment) {
            $comment->content = $markdown->text($comment->content);
        }
        return view('topics.show', compact('topic'));
    }

    public function create()
    {
        $uptoken = \QiniuHelper::qiniuToken();
        $sort = TopicsSort::all();
        $type = TopicsType::all();
        return view('topics.create', compact('type', 'sort', 'uptoken'));
    }

    public function store(Request $request)
    {
        // todo with laravel5.2 new validation
        $data = $request->only(array('title', 'content', 'type_id', 'sort_id', 'image'));
        $data['user_id'] = Auth::user()->id;
        $topic = Topics::create($data);
        return redirect('/topic/' . $topic->id);
    }

    public function edit($id)
    {
        $uptoken = \QiniuHelper::qiniuToken();
        $topic = Topics::findOrfail($id);
        $sort = TopicsSort::all();
        $type = TopicsType::all();
        return view('topics.edit', compact('topic', 'type', 'sort', 'uptoken'));
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}

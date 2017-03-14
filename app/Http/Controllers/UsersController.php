<?php namespace App\Http\Controllers;

use App\Models\Comments;
use App\Models\Topics;
use App\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{


    /**
     * UsersController constructor.
     */
    public function __construct()
    {
    }

    public function index()
    {
    }

    public function show($id)
    {
        $user = User::findOrfail($id);
        $topics = Topics::whereUserId($user->id)->get();
        $comments = Comments::whereUserId($user->id)->get();
        return view('users.show', compact('user', 'topics', 'comments'));
    }

    public function create()
    {
    }

    public function store()
    {
    }

    public function edit($id)
    {
    }

    public function editAvatar($id)
    {
        $user = User::findOrFail($id);
        $this->authorize('update', $user);
        $uptoken = \QiniuHelper::qiniuToken();
        return view('users.edit_avatar', compact('user', 'uptoken'));
    }

    public function updateAvatar($id, Request $request)
    {
        $user = User::findOrFail($id);
        $this->authorize('update', $user);
        $avatar = $request->get('avatar');
        $user->avatar = $avatar;
        $user->update();
        $uptoken = \QiniuHelper::qiniuToken();
        return view('users.edit_avatar', compact('user', 'uptoken'));
    }

    public function update($id)
    {
    }

    public function destroy($id)
    {
    }

}

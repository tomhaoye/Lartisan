<?php namespace App\Http\Controllers;


use App\Http\Requests\Request;
use App\Models\Topics;
use App\User;

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
        return view('users.show', compact('user', 'topics'));
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
        return view('users.edit_avatar', compact('user'));
    }

    public function updateAvatar($id, Request $request)
    {
    }git

    public function update($id)
    {
    }

    public function destroy($id)
    {
    }

}

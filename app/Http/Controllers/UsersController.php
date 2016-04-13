<?php namespace App\Http\Controllers;


use App\Models\User;

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
        return view('users.show',compact('user'));
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

    public function update($id)
    {
    }

    public function destroy($id)
    {
    }

}
<?php
/**
 * | --------------------------------------------------------------------------
 * |
 * | This file is part of Lartisan PROJECT
 * |
 * | Date: 17/3/14
 * |
 * | Copyright (C) 2015 Foshan Sami Network Technology Co.,Ltd.
 * | All rights reserved.
 * |
 * | Authors:
 * |       qiuyiwei
 * |
 * | This software, including documentation, is protected by copyright
 * | controlled by Foshan Sami Network Technology Co.,Ltd.
 * | All rights are reserved.
 * |
 * | --------------------------------------------------------------------------
 */

namespace App\Http\Controllers;


use App\Models\Comments;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CommentController extends Controller
{
    public function store(Request $request)
    {
        // todo with laravel5.2 new validation
        $data = $request->only(array('content', 'topic_id'));
        $data['user_id'] = Auth::user()->id;
        Comments::create($data);
        return redirect(route('topic.show', $data['topic_id'] . '#last-comment'));
    }

    public function update()
    {

    }
}

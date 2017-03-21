<?php
/**
 * | --------------------------------------------------------------------------
 * |
 * | This file is part of Lartisan PROJECT
 * |
 * | Date: 17/3/21
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

namespace App\Policies;


use App\Models\Topics;
use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class TopicsPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function update(User $currentUser, Topics $topic)
    {
        return $currentUser->id == $topic->user_id;
    }

    public function delete(User $currentUser, Topics $topic)
    {
        return $currentUser->id == $topic->user_id;
    }
}

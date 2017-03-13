<?php
/**
 * | --------------------------------------------------------------------------
 * |
 * | This file is part of Lartisan PROJECT
 * |
 * | Date: 17/3/13
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

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Comments extends Model
{
    protected $table = 'comments';
    public $timestamps = true;
    public $primaryKey = 'id';
    protected $guarded = array('id');

    public static $createJobRule = array(
        'content' => 'required',
        'user_id' => 'required|exists:users,id',
        'topic_id' => 'required|exists:topic,id',
    );

    public function topic()
    {
        return $this->belongsTo('App\Models\Topics', 'topic_id', 'id');
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}

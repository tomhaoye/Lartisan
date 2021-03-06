<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Topics extends Model
{
    //
    protected $table = 'topics';
    public $timestamps = true;
    public $primaryKey = 'id';
    protected $guarded = array('id');

    public static $createJobRule = array(
        'title' => 'required',
        'description' => 'required',
        'content' => 'required',
        'user_id' => 'required|exists:users,id',
        'type_id' => 'required|exists:topic_type,id',
        'sort_id' => 'required|exists:topic_sort,id',
    );

    public function sort()
    {
        return $this->hasOne('App\Models\TopicsSort', 'id', 'sort_id');
    }

    public function user()
    {
        return $this->hasOne('App\User', 'id', 'user_id');
    }

    public function comments()
    {
        return $this->hasMany('App\Models\Comments', 'topic_id', 'id');
    }

    public function updateViewCount()
    {
        $this->increment('view_count');
    }
}

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

    public function sort()
    {
        return $this->hasOne('App\Models\TopicsSort','id','sort_id');
    }
}

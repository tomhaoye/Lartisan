<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopicsSort extends Model
{
    //
    protected $table = 'topics_sort';
    public $timestamps = true;
    public $primaryKey = 'id';
    protected $guarded = array('id');
}

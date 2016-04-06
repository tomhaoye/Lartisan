<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopicsType extends Model
{
    //
    protected $table = 'topics_type';
    public $primaryKey = 'id';
    protected $guarded = array('id');
}

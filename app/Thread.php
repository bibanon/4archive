<?php
namespace App;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Thread extends Model
{
    //use SoftDeletes;
    public $timestamps = false;

    protected $table = "threads";
    protected $hidden = ['secret'];

    public function posts()
    {
        return $this->hasMany('App\Post', 'threads_id', 'id');
    }

    public function takedown_requests()
    {
        return $this->hasMany('App\TakedownRequest', 'thread_id', 'id');
    }
}
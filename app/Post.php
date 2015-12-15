<?php
namespace App;

use Illuminate\Database\Eloquent\Model as Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    //use SoftDeletes;
    public $timestamps = false;

    protected $table = "posts";
    protected $fillable = ["chan_id", "threads_id", "chan_image_name", "image_size", "image_dimensions", "thumb_dimensions", "image_url", "imgur_hash", "original_image_name", "subject", "name", "tripcode", "capcode", "chan_post_date", "body", "available", "md5"];

    public function thread()
    {
        return $this->belongsTo('App\Thread', 'id', 'thread_id');
    }

    public function getImageSize()
    {
        if ($this->image_size > 1024) {
            $kb = $this->image_size / 1024;

            if ($kb > 1024) {
                $mb = $kb / 1024;
                if ($mb > 1024) {
                    $gb = $mb / 1024;
                    return $gb . ' GB';
                }

                return $mb . ' MB';
            }

            return $kb . ' KB';
        }

        return $this->image_size . ' B';
    }
}
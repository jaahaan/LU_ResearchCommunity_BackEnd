<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notify extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','post_id', 'post_user_id', 'title', 'msg', 'type', 'seen_count', 'seen' 
    ];
    public function user(){
        return $this->belongsTo('App\Models\User','user_id', 'id');
    }
    public function post(){
        return $this->belongsTo('App\Models\Post','post_id', 'id');
    }
}

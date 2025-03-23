<?php

namespace App\Models;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $fillable = [
        'comment',
        'user_id',
        'post_id',
        'status',
        'ip_address',
    ];
    public function Post()
    {
        return $this->belongsTo(Post::class);
    }
    public function User(){
        return $this->belongsTo(User::class);
    }
    
}

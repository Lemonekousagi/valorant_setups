<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'title',
        'body',
        'image_pass',
        'agent_id',
        'map_id',
        'side_id',
    ];

    public function user()   
    {
        return $this->belongsTo(User::class);  
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function agent()
    {
        return $this->belongsTo(Agent::class);
    }

    public function side()
    {
        return $this->belongsTo(Side::class);
    }

    public function map()
    {
        return $this->belongsTo(Map::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}

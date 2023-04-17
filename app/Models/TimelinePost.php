<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TimelinePost extends Model
{
    use HasFactory;
    protected $fillable =[
        "slug",	"title", "user_id"	, "category_id", "subcategory_id", "description"
    ];

    public function post_comments() {
        return $this->hasMany(Postcomments::class, 'post_id', 'id');
    }

    public function post_galleries() {
        return $this->hasMany(PostGallery::class, 'post_id', 'id');
    }

    public function category() {
        return $this->belongsTo(Categories::class, 'category_id', 'id');
    }

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

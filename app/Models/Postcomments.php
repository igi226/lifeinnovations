<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postcomments extends Model
{
    use HasFactory;
    protected $fillable = ["post_id", "user_id", "comment_text"];

    public function user() {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SiteInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        "site_name", "logo_image", "favicon_image", "email", "address","phone", "twitter", "facebook", "instagram", "youtube", "pinterest", "vk",
    ];
}

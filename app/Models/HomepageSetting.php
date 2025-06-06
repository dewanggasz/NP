<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class HomepageSetting extends Model
{
    use SoftDeletes;
    use HasFactory;
    
    protected $fillable = [
        'hero_video_path',
        'hero_image_path',
        'hero_video_name',
        'hero_image_name',
        'version',
        'is_current',  // Pastikan kolom is_current ada dalam daftar $fillable
    ];
}

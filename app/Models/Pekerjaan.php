<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Pekerjaan extends Model
{
    use HasFactory;

    // Tentukan nama tabel jika berbeda dengan penamaan default
    protected $table = 'pekerjaan';

    // Kolom yang dapat diisi (fillable)
    protected $fillable = [
        'role',
        'slug',
        'location',
        'type',
        'category',
        'position',
        'salary',
        'deadline',
        'cover_description',
        'responsibilities',
        'education',
        'experience',
        'additional',
        'benefits',
        'slug',
    ];

    // Kolom yang akan otomatis diatur oleh Laravel (created_at, updated_at)
    protected $dates = ['created_at', 'updated_at', 'deadline'];

    /**
     * Scope untuk mencari pekerjaan berdasarkan tipe.
     */
    public function scopeType($query, $type)
    {
        return $query->where('type', $type);
    }

    /**
     * Fungsi untuk membuat slug secara otomatis sebelum menyimpan data.
     */
    public static function boot()
    {
        parent::boot();

        static::creating(function ($pekerjaan) {
            if (empty($pekerjaan->slug)) {
                $pekerjaan->slug = \Str::slug($pekerjaan->role);
            }
        });
    }
}

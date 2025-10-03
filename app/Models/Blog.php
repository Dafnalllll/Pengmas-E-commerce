<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    // Menentukan nama tabel secara eksplisit (jika menggunakan konvensi non-standar)
    protected $table = 'blogs'; 

    /**
     * Kolom yang dapat diisi melalui mass assignment.
     */
    protected $fillable = [
        'judul_blog',
        'tanggal_upload',
        'kategori',
        'excerpt',
        'content',
        'image',
        'author',
        'is_published',
        'is_featured',
    ];

    /**
     * Konversi tipe data kolom secara otomatis (Casting).
     */
    protected $casts = [
        'is_published' => 'boolean',
        'is_featured' => 'boolean',
        'tanggal_upload' => 'date', // Memastikan tanggal diakses sebagai Carbon instance
    ];
}

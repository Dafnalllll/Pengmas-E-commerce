<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sop extends Model
{
    protected $fillable = [
        'nama_file',
        'tanggal',
        'dokumen',
    ];
}

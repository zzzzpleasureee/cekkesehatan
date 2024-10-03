<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    use HasFactory;
    protected $table = 'medical';  // Sesuian dengan nama tabel di database
    protected $fillable = [
        'no_rm',
        'tanggal_periksa',
        'keluhan',
        'lab',
        'diagnosis',
        'terapi',
    ];
}

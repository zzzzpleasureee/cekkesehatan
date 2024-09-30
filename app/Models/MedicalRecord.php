<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalRecord extends Model
{
    use HasFactory;
    protected $table = 'medical_records';  // Sesuian dengan nama tabel di database
    protected $fillable = [
        'no_rm',
        'tanggal_periksa',
        'keluhan',
        'lab',
        'diagnosis',
        'terapi',
    ];

}

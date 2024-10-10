<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kunjungan extends Model
{
    use HasFactory;
    protected $table = 'kunjungan';
    protected $fillable = [
        'tanggal',
        'no_pasien',
        'nama_pasien',
        'umur',
        'rekam_medis',
        'treatment',
        'rujukan',
        'dokter'
    ];

    public function kunjungan()
    {
        $this->belongsTo(Kunjungan::class);
    }
}

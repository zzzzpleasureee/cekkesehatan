<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'jenis_kelamin',
        'tanggal_lahir',
        'tempat_lahir',
        'alamat',
        'no_kartu_bpjs',
        'no_hp',
        'dokter',
        'golongan darah'
    ];

    public function doctor()
    {
        $this->belongsTo(Doctor::class);
    }
}

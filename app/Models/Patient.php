<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;
    protected $table = 'patients';
    protected $fillable = [
        'name',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'no_kartu_bpjs',
        'no_hp',
        'dokter',
        'golongan_darah'
    ];

    public function doctor()
    {
        $this->belongsTo(Doctor::class);
    }
}

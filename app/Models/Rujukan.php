<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rujukan extends Model
{
    use HasFactory;
    protected $table = 'rujukan';
    protected $fillable = [
        'rekam_medis',
        'dokter',
        'nama_pasien',
        'rumah_sakit',
        'tanggal'
    ];

    
    public function rujukan()
    {
       return $this->belongsTo(Rujukan::class);
    }


}

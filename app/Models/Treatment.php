<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Treatment extends Model
{
    use HasFactory;
    protected $table = 'treatment';
    protected $fillable = [
        'tanggal',
        'nama_pasien',
        'berat_badan',
        'tinggi_badan',
        'tekanan_darah',
    ];
    public function treatment()
    {
        $this->belongsTo(treatment::class);
    }

}

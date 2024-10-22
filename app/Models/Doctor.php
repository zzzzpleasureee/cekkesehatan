<?php

namespace App\Models;

use App\Models\Patient;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Doctor extends Model
{
    use HasFactory;
    protected $table = 'doctors';
    protected $fillable = [
        'name',
    ];

    public function doctors()
    {
        return $this->hasMany(Patient::class);
    }
}


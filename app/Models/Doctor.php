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

    public static function boot()
    {
        parent::boot();

        static::deleting(function($model) {
            Patient::where('doctor', $model->id)->delete();
        });
    }

    public function patients()
    {
        return $this->hasMany(Patient::class);
    }
}


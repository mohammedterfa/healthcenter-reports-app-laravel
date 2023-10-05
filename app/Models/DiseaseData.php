<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DiseaseData extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'date',
        'disease',
        'examination',
        'cases_number',
        'positive',
        'negative'
    ];

    protected $casts = [
        'date' => 'date',
    ];


    public function disease_name()
    {
        return $this->hasOne(Disease::class, 'id', 'disease');
    }
}

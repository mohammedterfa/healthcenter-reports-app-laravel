<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DiseaseData extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'disease',
        'examination',
        'cases_number',
    ];
}

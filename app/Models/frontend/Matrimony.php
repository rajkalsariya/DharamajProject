<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Matrimony extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'uid',
        'name',
        'photourl',
        'bdt',
        'biourl',
        'sex',
        'district',
        'state',
        'maritalstatus',
        'occupation',
    ];
}

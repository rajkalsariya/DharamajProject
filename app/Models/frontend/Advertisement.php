<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Advertisement extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'uid',
        'cid',
        'description',
        'redirecturl',
        'startdate',
        'enddate',
        'imageurl',
        'price',
        'paidmode',
    ];
}

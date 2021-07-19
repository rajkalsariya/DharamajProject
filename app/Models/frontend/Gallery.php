<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'details',
        'gtype',
        'fileurl',
        'timage',
        'uid',
    ];
}

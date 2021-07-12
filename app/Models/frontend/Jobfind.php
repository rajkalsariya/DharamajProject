<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobfind extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'uid',
        'name',
        'resume',
        'contactno',
        'emailid',
        'description',
    ];
}

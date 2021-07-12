<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobpost extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'uid',
        'title',
        'description',
        'contactno',
        'emailid',
        'city',
        'country',
        'photo',
        'jobtype',
        'jobdetails',
        'jpdt',
    ];
}

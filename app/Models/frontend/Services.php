<?php

namespace App\Models\frontend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Services extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'title',
        'logo',
        'established',
        'contact1',
        'contact2',
        'email',
        'cid',
        'description',
        'adder1',
        'adder2',
        'city',
        'pincode',
        'website',
        'photourl',
    ];
}

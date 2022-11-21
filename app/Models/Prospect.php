<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prospect extends Model
{
    use HasFactory;
    protected $fillable = [
        'firstName',
        'secondName',
             'company',
             'emailAddress',
             'phoneNumber',
             'address',
             'website',
             'source'
        
    ];

}

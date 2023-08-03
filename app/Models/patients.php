<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class patients extends Model
{
    use HasFactory;
    protected $fillable = [
        'telephone','name', 'dob', 'id_number','address','county','sub_county','email','gender','marital'
    ];
}


            

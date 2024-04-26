<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ukt extends Model
{

    protected $table = 'ukt';

    protected $fillable = [
        'golongan',
        'biaya'
    ];

    
    use HasFactory;
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ukt extends Model
{

    protected $table = 'ukt';

    protected $fillable = [
        'golongan',
        'biaya'
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }

    
    use HasFactory;
}

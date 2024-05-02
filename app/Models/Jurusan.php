<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Jurusan extends Model
{

    protected $table = 'jurusan';

    protected $fillable = ['name'];


    public function user(){
        return $this->belongsTo(User::class);
    }

    public function fakultas(){
        return $this->belongsTo(Fakultas::class);
    }

    use HasFactory;
}

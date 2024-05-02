<?php

namespace App\Models;

use App\Models\Jurusan;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Fakultas extends Model
{
    protected $table = 'fakultas';

    protected $fillable = 'name';

    public function jurusan():HasMany{
        return $this->hasMany(Jurusan::class);
    }
    
    use HasFactory;
}

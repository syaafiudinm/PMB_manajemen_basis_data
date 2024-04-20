<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Peserta extends Model
{
    use HasFactory;

    protected $table = 'peserta';

    protected $fillable = [
        'NISN',
        'nama',
        'Fakultas',
        'Jurusan',
        'asalSekolah',
        'tgl-lahir',
        'Phone',
        'Email'
    ];

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}

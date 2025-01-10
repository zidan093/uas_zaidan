<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    public function jurusan(): BelongsTo
    {
        return $this->belongsTo(Jurusan::class);
    }
}

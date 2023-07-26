<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SkckDaftarSuami extends Model
{
    use HasFactory;

    protected $table = 'skck_daftar_suamis';
    protected $guarded = [];

    // belongs to skck daftar diri
    public function skckDaftarDiri()
    {
        return $this->belongsTo(SkckDaftarDiri::class,'skck_daftar_diri_id');
    }
}
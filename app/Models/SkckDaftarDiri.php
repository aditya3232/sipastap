<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class SkckDaftarDiri extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     'name',
    // ];

    protected $table = 'skck_daftar_diris';
    protected $guarded = [];

    // hasOne Bapak
    public function skckDaftarBapak(): HasOne
    {
        // return $this->hasOne(Phone::class, 'foreign_key', 'local_key');
        return $this->hasOne(SkckDaftarBapak::class, 'skck_daftar_diri_id');
    }

    // hasOne Ibu
    public function skckDaftarIbu(): HasOne
    {
        return $this->hasOne(SkckDaftarIbu::class, 'skck_daftar_diri_id');
    }

    // hasOne Istri
    public function skckDaftarIstri(): HasOne
    {
        return $this->hasOne(SkckDaftarIstri::class, 'skck_daftar_diri_id');
    }
    

    // hasOne Suami
    public function skckDaftarSuami(): HasOne
    {
        return $this->hasOne(SkckDaftarSuami::class, 'skck_daftar_diri_id');
    }

    // hasOne Pelanggaran
    public function skckDaftarPelanggaran(): HasOne
    {
        return $this->hasOne(SkckDaftarPelanggaran::class, 'skck_daftar_diri_id');
    }

    // hasOne Pidana
    public function skckDaftarPidana(): HasOne
    {
        return $this->hasOne(SkckDaftarPidana::class, 'skck_daftar_diri_id');
    }

    // hasOne Saudara
    public function skckDaftarSaudara(): HasOne
    {
        return $this->hasOne(SkckDaftarSaudara::class, 'skck_daftar_diri_id');
    }




}
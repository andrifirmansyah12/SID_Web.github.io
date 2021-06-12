<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PermintaanSuratApiModel extends Model
{
    use HasFactory;
    protected $table = 'permintaan_surat';
    protected $fillable = [
        'nik',
        'nama_penduduk',
        'nama_surat',
        'status',
    ];
}

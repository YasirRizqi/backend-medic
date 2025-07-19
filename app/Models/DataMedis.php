<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DataMedis extends Model
{
    protected $fillable = [
    'nama',
    'nomor_riwayat',
    'tanggal_lahir',
    'jenis_kelamin',
    'alamat',
    'nomor_hp',
    'keluhan',
    'diagnosa',
    'tindakan',
    'resep_obat',
    'dokter_penanggung_jawab',
    'tanggal_periksa',
    'user_id',
];

}

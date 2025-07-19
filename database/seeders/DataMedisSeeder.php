<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\DataMedis;

class DataMedisSeeder extends Seeder
{
    public function run(): void
    {
        DataMedis::create([
            'nama' => 'Pasien Dummy Satu',
            'nomor_riwayat' => 'RM001',
            'tanggal_lahir' => '1990-01-01',
            'jenis_kelamin' => 'L',
            'alamat' => 'Jalan A No.1',
            'nomor_hp' => '081234567891',
            'keluhan' => 'Demam tinggi',
            'diagnosa' => 'Tipes',
            'tindakan' => 'Rawat inap',
            'resep_obat' => 'Paracetamol',
            'dokter_penanggung_jawab' => 'dr. Andi',
            'tanggal_periksa' => now()->toDateString(),
            'user_id' => 1, // sesuaikan dengan user id
        ]);

        DataMedis::create([
            'nama' => 'Pasien Dummy Dua',
            'nomor_riwayat' => 'RM002',
            'tanggal_lahir' => '1995-05-05',
            'jenis_kelamin' => 'P',
            'alamat' => 'Jalan B No.2',
            'nomor_hp' => '081298765432',
            'keluhan' => 'Batuk pilek',
            'diagnosa' => 'Flu',
            'tindakan' => 'Rawat jalan',
            'resep_obat' => 'Obat flu',
            'dokter_penanggung_jawab' => 'dr. Budi',
            'tanggal_periksa' => now()->toDateString(),
            'user_id' => 2,
        ]);
    }
}

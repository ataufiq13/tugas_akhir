<?php

namespace Database\Seeders;

use App\Models\Pesanan;
use Illuminate\Database\Seeder;

class PesananSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Pesanan::create([
            'desainer' => 'Ahmad Taufiq H',
            'tanggal_pesan' => '2022-06-20',
            'satuan' => 10,
            'total_bayar' => 5000,
            'status' => 'Lunas',
            'tracking' => 'Proses Cetak',
            'bukti_bayar' => 'image',
            'jenis_id' => 1,
            'user_id' => 3
        ]);

        Pesanan::create([
            'desainer' => 'Ahmad Taufiq H',
            'tanggal_pesan' => '2022-06-21',
            'satuan' => 2,
            'total_bayar' => 20000,
            'status' => 'Lunas',
            'tracking' => 'Selesai',
            'bukti_bayar' => 'image',
            'jenis_id' => 8,
            'user_id' => 4
        ]);

        Pesanan::create([
            'desainer' => 'Ahmad Taufiq H',
            'tanggal_pesan' => '2022-06-23',
            'satuan' => 1,
            'total_bayar' => 10000,
            'status' => 'Lunas',
            'tracking' => 'Cutting',
            'bukti_bayar' => 'image',
            'jenis_id' => 8,
            'user_id' => 3
        ]);

        Pesanan::create([
            'desainer' => 'Ahmad Taufiq H',
            'tanggal_pesan' => '2022-06-25',
            'satuan' => 5,
            'total_bayar' => 50000,
            'status' => 'Belum',
            'tracking' => 'Cutting',
            'bukti_bayar' => 'image',
            'jenis_id' => 8,
            'user_id' => 4
        ]);
    }
}

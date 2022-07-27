<?php

namespace Database\Seeders;

use App\Models\Tracking;
use Illuminate\Database\Seeder;

class TrackingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i < 8; $i++) {
            Tracking::create([
                'proses' => 'Proses Cetak',
                'deskripsi' => 'Pesanan anda sedang dicetak oleh tim kami',
                'jenis_id' => $i
            ]);

            Tracking::create([
                'proses' => 'Selesai',
                'deskripsi' => 'Pesanan anda sudah selesai dan siap diambil',
                'jenis_id' => $i
            ]);
        }


        //*----------------------------*//

        for ($i = 8; $i < 11; $i++) {
            Tracking::create([
                'proses' => 'Proses Cetak',
                'deskripsi' => 'Pesanan anda sedang dicetak oleh tim kami',
                'jenis_id' => $i
            ]);

            Tracking::create([
                'proses' => 'Cutting',
                'deskripsi' => 'Pesanan anda sedang proses pemotongan',
                'jenis_id' => $i
            ]);

            Tracking::create([
                'proses' => 'Selesai',
                'deskripsi' => 'Pesanan anda sudah selesai dan siap diambil',
                'jenis_id' => $i
            ]);
        }
    }
}

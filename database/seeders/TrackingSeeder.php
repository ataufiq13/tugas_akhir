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
                'jenis_id' => $i
            ]);

            Tracking::create([
                'proses' => 'Selesai',
                'jenis_id' => $i
            ]);
        }


        //*----------------------------*//

        for ($i = 8; $i < 11; $i++) {
            Tracking::create([
                'proses' => 'Proses Cetak',
                'jenis_id' => $i
            ]);

            Tracking::create([
                'proses' => 'Cutting',
                'jenis_id' => $i
            ]);

            Tracking::create([
                'proses' => 'Selesai',
                'jenis_id' => $i
            ]);
        }
    }
}

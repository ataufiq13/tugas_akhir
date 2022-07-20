<?php

namespace Database\Seeders;

use App\Models\Jenis;
use Illuminate\Database\Seeder;

class JenisSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Jenis::create([
            'jenis' => 'HVS 70gr',
            'ukuran' => 'A4/F4',
            'harga' => 500,
            'product_id' => 1
        ]);

        Jenis::create([
            'jenis' => 'HVS 80gr',
            'ukuran' => 'A4/F4',
            'harga' => 750,
            'product_id' => 1
        ]);

        Jenis::create([
            'jenis' => 'HVS 70gr',
            'ukuran' => 'A3',
            'harga' => 2000,
            'product_id' => 1
        ]);

        //*----------------------------*//

        Jenis::create([
            'jenis' => 'AP 150gr',
            'ukuran' => 'F4',
            'harga' => 4000,
            'product_id' => 2
        ]);

        Jenis::create([
            'jenis' => 'AP 230gr',
            'ukuran' => 'F4',
            'harga' => 5000,
            'product_id' => 2
        ]);

        Jenis::create([
            'jenis' => 'AP 150gr',
            'ukuran' => 'A3',
            'harga' => 8000,
            'product_id' => 2
        ]);

        Jenis::create([
            'jenis' => 'AP 230gr',
            'ukuran' => 'A3',
            'harga' => 10000,
            'product_id' => 2
        ]);

        //*----------------------------*//

        Jenis::create([
            'jenis' => 'Chromo',
            'ukuran' => 'A3',
            'harga' => 10000,
            'product_id' => 3
        ]);

        Jenis::create([
            'jenis' => 'Vinyl',
            'ukuran' => 'A3',
            'harga' => 15000,
            'product_id' => 3
        ]);

        Jenis::create([
            'jenis' => 'Transparan',
            'ukuran' => 'A3',
            'harga' => 20000,
            'product_id' => 3
        ]);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'nama' => 'Print HVS'
        ]);

        Product::create([
            'nama' => 'Print Art Paper'
        ]);

        Product::create([
            'nama' => 'Print Stiker'
        ]);

        Product::create([
            'nama' => 'Print Sertifikat'
        ]);

        Product::create([
            'nama' => 'Laminating'
        ]);

        Product::create([
            'nama' => 'Scan'
        ]);
        Product::create([
            'nama' => 'Nama Dada'
        ]);

        Product::create([
            'nama' => 'Custom Mug / Gelas'
        ]);

        Product::create([
            'nama' => 'Kartu Nama'
        ]);

        Product::create([
            'nama' => 'ID Card'
        ]);

        Product::create([
            'nama' => 'Cetak Foto'
        ]);

        Product::create([
            'nama' => 'Vandel'
        ]);

        Product::create([
            'nama' => 'Sablon'
        ]);

        Product::create([
            'nama' => 'Pin dan Gantungan Kunci'
        ]);

        Product::create([
            'nama' => 'Buku Yasin'
        ]);

        Product::create([
            'nama' => 'Stempel'
        ]);
    }
}

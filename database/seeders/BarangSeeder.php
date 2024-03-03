<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'barang_id' => 1,
                'kategori_id' => 001,
                'barang_kode' => 'brg1',
                'barang_nama' => 'Jumpsuit',
                'harga_beli' => '169000',
                'harga_jual' => '170000',
            ],
            [
                'barang_id' => 2,
                'kategori_id' => 001,
                'barang_kode' => 'brg2',
                'barang_nama' => 'Hoodie',
                'harga_beli' => '250000',
                'harga_jual' => '255000',
            ],
            [
                'barang_id' => 3,
                'kategori_id' => 002,
                'barang_kode' => 'brg3',
                'barang_nama' => 'Kipas Portable',
                'harga_beli' => '96000',
                'harga_jual' => '100000',
            ],
            [
                'barang_id' => 4,
                'kategori_id' => 002,
                'barang_kode' => 'brg4',
                'barang_nama' => 'Charger Handphone',
                'harga_beli' => '60000',
                'harga_jual' => '65000',
            ],
            [
                'barang_id' => 5,
                'kategori_id' => 003,
                'barang_kode' => 'brg5',
                'barang_nama' => 'Sunscreen',
                'harga_beli' => '79000',
                'harga_jual' => '80000',
            ],
            [
                'barang_id' => 6,
                'kategori_id' => 003,
                'barang_kode' => 'brg6',
                'barang_nama' => 'Facewash',
                'harga_beli' => '35000',
                'harga_jual' => '38000',
            ],
            [
                'barang_id' => 7,
                'kategori_id' => 004,
                'barang_kode' => 'brg7',
                'barang_nama' => 'Minyak',
                'harga_beli' => '25000',
                'harga_jual' => '35000',
            ],
            [
                'barang_id' => 8,
                'kategori_id' => 004,
                'barang_kode' => 'brg8',
                'barang_nama' => 'Beras',
                'harga_beli' => '700000',
                'harga_jual' => '800000',
            ],
            [
                'barang_id' => 9,
                'kategori_id' => 005,
                'barang_kode' => 'brg9',
                'barang_nama' => 'Sapu',
                'harga_beli' => '30000',
                'harga_jual' => '40000',
            ],
            [
                'barang_id' => 10,
                'kategori_id' => 005,
                'barang_kode' => 'brg10',
                'barang_nama' => 'Bean Bag',
                'harga_beli' => '375000',
                'harga_jual' => '390000',
            ],
        ];
        DB::table('m_barang')->insert($data);

    }
}

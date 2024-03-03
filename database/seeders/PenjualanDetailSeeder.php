<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenjualanDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'detail_id' => 1,
                'penjualan_id' => 1,
                'barang_id' => 1,
                'harga' => 525000,
                'jumlah' => 4,
            ],
            [
                'detail_id' => 2,
                'penjualan_id' => 1,
                'barang_id' => 2,
                'harga' => 2250000,
                'jumlah' => 5,
            ],
            [
                'detail_id' => 3,
                'penjualan_id' => 1,
                'barang_id' => 3,
                'harga' => 4100000,
                'jumlah' => 4,
            ],
            [
                'detail_id' => 4,
                'penjualan_id' => 2,
                'barang_id' => 4,
                'harga' => 6000000,
                'jumlah' => 5,
            ],
            [
                'detail_id' => 5,
                'penjualan_id' => 2,
                'barang_id' => 5,
                'harga' => 1650000,
                'jumlah' => 4,
            ],
            [
                'detail_id' => 6,
                'penjualan_id' => 2,
                'barang_id' => 6,
                'harga' => 1890000,
                'jumlah' => 5,
            ],
            [
                'detail_id' => 7,
                'penjualan_id' => 3,
                'barang_id' => 7,
                'harga' => 2340000,
                'jumlah' => 4,
            ],
            [
                'detail_id' => 8,
                'penjualan_id' => 3,
                'barang_id' => 8,
                'harga' => 1250000,
                'jumlah' => 5,
            ],
            [
                'detail_id' => 9,
                'penjualan_id' => 3,
                'barang_id' => 9,
                'harga' => 4500000,
                'jumlah' => 4,
            ],
            [
                'detail_id' => 10,
                'penjualan_id' => 4,
                'barang_id' => 10,
                'harga' => 5440000,
                'jumlah' => 5,
            ],
            [
                'detail_id' => 11,
                'penjualan_id' => 4,
                'barang_id' => 1,
                'harga' => 6240000,
                'jumlah' => 4,
            ],
            [
                'detail_id' => 12,
                'penjualan_id' => 4,
                'barang_id' => 2,
                'harga' => 1750000,
                'jumlah' => 5,
            ],
            [
                'detail_id' => 13,
                'penjualan_id' => 5,
                'barang_id' => 3,
                'harga' => 4900000,
                'jumlah' => 4,
            ],
            [
                'detail_id' => 14,
                'penjualan_id' => 5,
                'barang_id' => 4,
                'harga' => 6980000,
                'jumlah' => 5,
            ],
            [
                'detail_id' => 15,
                'penjualan_id' => 5,
                'barang_id' => 5,
                'harga' => 3400000,
                'jumlah' => 4,
            ],
            [
                'detail_id' => 16,
                'penjualan_id' => 6,
                'barang_id' => 6,
                'harga' => 7060000,
                'jumlah' => 5,
            ],
            [
                'detail_id' => 17,
                'penjualan_id' => 6,
                'barang_id' => 7,
                'harga' => 4320000,
                'jumlah' => 4,
            ],
            [
                'detail_id' => 18,
                'penjualan_id' => 6,
                'barang_id' => 8,
                'harga' => 3250000,
                'jumlah' => 5,
            ],
            [
                'detail_id' => 19,
                'penjualan_id' => 7,
                'barang_id' => 9,
                'harga' => 2900000,
                'jumlah' => 4,
            ],
            [
                'detail_id' => 20,
                'penjualan_id' => 7,
                'barang_id' => 10,
                'harga' => 5000000,
                'jumlah' => 5,
            ],
            [
                'detail_id' => 21,
                'penjualan_id' => 7,
                'barang_id' => 1,
                'harga' => 3100000,
                'jumlah' => 4,
            ],
            [
                'detail_id' => 22,
                'penjualan_id' => 8,
                'barang_id' => 2,
                'harga' => 1786000,
                'jumlah' => 5,
            ],
            [
                'detail_id' => 23,
                'penjualan_id' => 8,
                'barang_id' => 3,
                'harga' => 2470000,
                'jumlah' => 4,
            ],
            [
                'detail_id' => 24,
                'penjualan_id' => 8,
                'barang_id' => 4,
                'harga' => 2810000,
                'jumlah' => 5,
            ],

            [
                'detail_id' => 25,
                'penjualan_id' => 9,
                'barang_id' => 5,
                'harga' => 1670000,
                'jumlah' => 4,
            ],
            [
                'detail_id' => 26,
                'penjualan_id' => 9,
                'barang_id' => 6,
                'harga' => 1850000,
                'jumlah' => 5,
            ],            
            [
                'detail_id' => 27,
                'penjualan_id' => 9,
                'barang_id' => 7,
                'harga' => 3330000,
                'jumlah' => 4,
            ],
            [
                'detail_id' => 28,
                'penjualan_id' => 10,
                'barang_id' => 8,
                'harga' => 2220000,
                'jumlah' => 5,
            ],
            [
                'detail_id' => 29,
                'penjualan_id' => 10,
                'barang_id' => 9,
                'harga' => 4440000,
                'jumlah' => 4,
            ],
            [
                'detail_id' => 30,
                'penjualan_id' => 10,
                'barang_id' => 10,
                'harga' => 5550000,
                'jumlah' => 5,
            ],

        ];
        DB::table('t_penjualan_detail')->insert($data);

    }
}

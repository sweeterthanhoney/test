<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'depo_id' => 1,
                'product_name' => 'Aqua 600 ml',
                'product_description' => 'AQUA BOTOL MINI 600 ML COCOK UNTUK SOUVERNIR KARENA UNIK PENGIRIMAN LUAR KOTA, SUDAH TERMASUK BUBBLE WRAP. MASIH BISA DI ORDER SELAMA BARANG MASIH BISA KLIK BELI... BARANG CEPAT HABIS, AYO SEGERA ORDER.. SEBELUM KEHABISAN KARENA SANGAT LIMITED EDITION',
                'product_price' => 10000,
                'product_stock' => 10,
            ],
        ]);
    }
}

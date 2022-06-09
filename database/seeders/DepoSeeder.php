<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('depos')->insert([
            [
                'depo_name' => 'Depo Rama Jaya',
                'depo_address' => 'Jl Wagir Baru II No.F4 Kwangsan Sedati Sidoarjo',
                'depo_city' => 'Sidoarjo',
                'depo_province' => 'Jawa Timur',
                'depo_email' => 'pratamaramadhani059@gmail.com',
                'depo_phone' => '085815554360',
                'depo_location' => 'Jl Wagir Baru II No.F4 Kwangsan Sedati Sidoarjo',
            ],
        ]);
    }
}

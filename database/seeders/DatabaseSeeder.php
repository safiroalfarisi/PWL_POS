<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            LevelSeeder::class,
            UserSeeder::class,
            KategoriSeeder::class,
            SupplierSeeder::class,
            BarangSeeder::class,
            StokSeeder::class,
            PenjualanSeeder::class,         // ← harus lebih dulu
            PenjualanDetailSeeder::class,   // ← baru detailnya
        ]);
    }
}

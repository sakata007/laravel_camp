<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductImageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('product_images')->insert([
            [
                'filename' => 'sample1.jpg'
            ],
            [
                'filename' => 'sample2.jpg'
            ],
            [
                'filename' => 'sample3.jpg'
            ],
            [
                'filename' => 'sample4.jpg'
            ],
            [
                'filename' => 'sample5.jpg'
            ],
            [
                'filename' => 'sample6.jpg'
            ],
        ]);
    }
}

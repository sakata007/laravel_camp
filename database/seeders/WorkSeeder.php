<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class WorkSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('works')->insert([
            [
            'name' => '作品A',
            'image1' => 'sample1.jpg'
            ],
            [
            'name' => '作品B',
            'image1' => 'sample1.jpg'
            ],
            [
            'name' => '作品C',
            'image1' => 'sample1.jpg'
            ],
            [
            'name' => '作品D',
            'image1' => 'sample1.jpg'
            ],
            [
            'name' => '作品E',
            'image1' => 'sample1.jpg'
            ],
            [
            'name' => '作品F',
            'image1' => 'sample1.jpg'
            ],
            [
            'name' => '作品G',
            'image1' => 'sample1.jpg'
            ],
        ]);
    }
}

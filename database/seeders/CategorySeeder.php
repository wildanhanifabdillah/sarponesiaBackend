<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('categories')->insert([
            [
                'Name' => 'Robusta',
                'category_type' => 'product'
            ],
            [
                'Name' => 'Roastedbean',
                'category_type' => 'product'
            ],
            [
                'Name' => 'Pupuk Kopi',
                'category_type' => 'product'
            ],
            [
                'Name' => 'Peralatan',
                'category_type' => 'product'
            ],
            [
                'Name' => 'Perawatan Kebun',
                'category_type' => 'service'
            ],
            [
                'Name' => 'Pelatihan',
                'category_type' => 'service'
            ],
            [
                'Name' => 'News',
                'category_type' => 'article'
            ],
            [
                'Name' => 'Coffee Technology',
                'category_type' => 'article'
            ],
            [
                'Name' => 'Tips & Trick',
                'Description' => 'Kategori untuk artikel tips dan trik seputar kopi',
                'category_type' => 'article'
            ],
        ]);
    }
}

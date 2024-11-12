<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

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
                'category_type' => 'product',
                'Description' => null
            ],
            [
                'Name' => 'Roastedbean',
                'category_type' => 'product',
                'Description' => null
            ],
            [
                'Name' => 'Pupuk Kopi',
                'category_type' => 'product',
                'Description' => null
            ],
            [
                'Name' => 'Peralatan',
                'category_type' => 'product',
                'Description' => null
            ],
            [
                'Name' => 'Perawatan Kebun',
                'category_type' => 'service',
                'Description' => null
            ],
            [
                'Name' => 'Pelatihan',
                'category_type' => 'service',
                'Description' => null
            ],
            [
                'Name' => 'News',
                'category_type' => 'article',
                'Description' => null
            ],
            [
                'Name' => 'Coffee Technology',
                'category_type' => 'article',
                'Description' => null
            ],
            [
                'Name' => 'Tips & Trick',
                'Description' => 'Kategori untuk artikel tips dan trik seputar kopi',
                'category_type' => 'article'
            ],
        ]);
    }
}

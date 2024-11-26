<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    \App\Models\Post::create([
        'title' => 'Contoh Judul',
        'content' => 'Ini adalah konten contoh.',
    ]);
}

}

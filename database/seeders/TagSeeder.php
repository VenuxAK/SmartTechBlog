<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tag::factory()->create([
            "name" => "Laravel"
        ]);
        Tag::factory()->create([
            "name" => "Vue.js"
        ]);
        Tag::factory()->create([
            "name" => "Node.js"
        ]);
        Tag::factory()->create([
            "name" => "Tailwind CSS"
        ]);
        Tag::factory()->create([
            "name" => "Backend Development"
        ]);
        Tag::factory()->create([
            "name" => "Frontend Development"
        ]);
        Tag::factory()->create([
            "name" => "Technology"
        ]);
    }
}

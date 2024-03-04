<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\WebService;

class WebServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        WebService::create([
            'lineup'=>'テスト',
            'description'=>'説明文',
            'price'=>'¥40,000～',
            'file_path'=>'test.jpg'
        ]);
    }
}

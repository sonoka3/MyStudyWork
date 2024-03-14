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
            'lineup'=>'PC構築',
            'description'=>'お客様が購入して、当店に持ち込んでいただいた部品を組立いたします。',
            'price'=>'40000',
            'price_mark'=>'-',
            'file_path'=>'up-images/dsBZ1nAaXdJ5tlGQxWbKs7N7GjL2BV6KciqYCZeG.png'
        ]);
        WebService::create([
            'lineup'=>'PCメンテナンス',
            'description'=>'各部品を清掃し、劣化した部品があればリストを作成します。',
            'price'=>'20000',
            'price_mark'=>'-',
            'file_path'=>'up-images/hhOMVr5GQ6EBFsijb5ENdGkHCQ5TqvvOZ0wdHkaB.png'
        ]);
        WebService::create([
            'lineup'=>'ソフトウエアアップグレード',
            'description'=>'1アプリあたりで、最新版に更新をいたします。',
            'price'=>'5000',
            'price_mark'=>'-',
            'file_path'=>'up-images/JBUxRS4pkl1E3Uzfajmj5QwKgbVc1LOfH7d7yssa.png'
        ]);
        WebService::create([
            'lineup'=>'アプリインストール',
            'description'=>'アプリのインストールから設定まで実施いたします。',
            'price'=>'40000',
            'price_mark'=>'-',
            'file_path'=>'up-images/huQyIRhu6UqFq9dBOZw9ocP7haq2UqYBFGxjje3W.png'
        ]);
        WebService::create([
            'lineup'=>'ソフトウエア開発',
            'description'=>'お客様がご要望している製品を開発させていただきます。',
            'price'=>'400000',
            'price_mark'=>'～',
            'file_path'=>'up-images/gpG6pDnLvww8NpedVQKQmk8atVzRMU84a72L2trf.png'
        ]);
        WebService::create([
            'lineup'=>'サーバー構築',
            'description'=>'ご要望に沿ったサーバーを構築いたします。',
            'price'=>'500000',
            'price_mark'=>'～',
            'file_path'=>'up-images/4yb9CVzVKSRlJrps8o4a2eLC9yL1MTSv9Od44EF6.png'
        ]);
    }
}

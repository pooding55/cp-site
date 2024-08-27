<?php

namespace Database\Seeders;

use App\Models\Page;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;

class PageSeeder extends Seeder
{
    public function run(): void
    {
        if (!Page::query()->where('url', '=', 'about-us')->exists()) {
            $page = File::get(database_path('/data/about-us.html'), true);

            Page::query()->create([
                'url' => 'about-us',
                'body' => $page,
                'title' => 'About Us',
                'lang' => 'en'
            ]);
        }

        if (!Page::query()->where('url', '=', 'terms')->exists()) {
            $page = File::get(database_path('/data/terms.html'), true);

            Page::query()->create([
                'url' => 'terms',
                'body' => $page,
                'title' => 'Terms and Conditions',
                'lang' => 'en'
            ]);
        }

        if (!Page::query()->where('url', '=', 'cookie')->exists()) {
            $page = File::get(database_path('/data/cookie.html'), true);

            Page::query()->create([
                'url' => 'cookie',
                'body' => $page,
                'title' => 'Cookies Policy',
                'lang' => 'en'
            ]);
        }

        if (!Page::query()->where('url', '=', 'privacy')->exists()) {
            $page = File::get(database_path('/data/privacy.html'), true);

            Page::query()->create([
                'url' => 'privacy',
                'body' => $page,
                'title' => 'Privacy Policy',
                'lang' => 'en'
            ]);
        }
    }
}

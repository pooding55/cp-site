<?php

namespace App\Services;

use App\Models\Article;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;

class NewsService
{
    private string $token = 'IYETu6LuWk8sC5ylANBgf9e3toPs3bT1';
    public function updateArticlesFMP(int $page = 0, int $perPage = 100, string $lang = 'en')
    {
        $client = new Client();
        $request = $client->request('GET', 'https://financialmodelingprep.com/api/v3/fmp/articles', [
            'query' => [
                'apikey' => $this->token,
                'page' => $page,
                'language' => $lang,
                'size' => '100'
            ]
        ]);

        $news = json_decode($request->getBody()->getContents(), true);

        foreach ($news['content'] as $new) {
            if (!Article::query()->where('title', '=', $new['title'])->exists()) {
                Article::query()->create([
                    'tickers' => $new['tickers'],
                    'title' => $new['title'],
                    'date' => $new['date'],
                    'content' => $new['content'],
                    'image' => $new['image'],
                    'author' => $new['author'],
                    'category' => 'Financial news',
                ]);
            }
        }
    }
}

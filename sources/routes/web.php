<?php

use App\Services\NewsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/about-us', function () {
    return view('about');
})->name('about');

Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/packages', function () {
    return view('packages');
})->name('packages');

Route::prefix('/news')->name('news.')->group(function () {
    Route::get('/', function () {
        return view('news.news', [
            'articles' => \App\Models\Article::query()
                ->orderByDesc('date')
                ->paginate(25)
        ]);
    })->name('index');

    Route::get('/{article}', function (\App\Models\Article $article) {
        return view('news.article', [
            'article' => $article
        ]);
    })->name('article');
});



Route::prefix('/legal')->name('legal.')->group(function () {
    Route::get('terms', function () {
        return view('legal.terms');
    })->name('terms');

    Route::get('/privacy', function () {
        return view('legal.privacy');
    })->name('privacy');

    Route::get('/cookie', function () {
        return view('legal.cookie');
    })->name('cookie');
});

Route::get('update-news', function (NewsService $service, Request $request) {
    $service->updateArticlesFMP($request->page, 100, 'en');
});

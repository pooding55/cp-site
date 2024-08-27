<?php

use App\Models\Page;
use App\Services\NewsService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/thank-you', function () {
    return view('thankyou');
})->name('thankyou');

Route::get('/about-us', function () {
    return view('page', [
        'page' => Page::query()
            ->where('url', '=', 'about-us')
            //todo lang
            ->first()
    ]);
})->name('about');


Route::get('/courses', function () {
    return view('courses');
})->name('courses');

Route::get('/courses/how-forex-brokers-work', function () {
    return view('courses.how-forex-brokers-work');
})->name('how-forex-brokers-work');

Route::get('/courses/what-is-forex', function () {
    return view('courses.what-is-forex');
})->name('what-is-forex');

Route::get('/courses/chart-patterns-schmatterns', function () {
    return view('courses.chart-patterns-schmatterns');
})->name('chart-patterns-schmatterns');

Route::get('/courses/relative-strength-index', function () {
    return view('courses.relative-strength-index');
})->name('relative-strength-index');

Route::get('/courses/ways-to-measure-volatility', function () {
    return view('courses.ways-to-measure-volatility');
})->name('ways-to-measure-volatility');

Route::get('/courses/make-money-trading-forex', function () {
    return view('courses.make-money-trading-forex');
})->name('make-money-trading-forex');


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
        return view('page', [
            'page' => Page::query()
                ->where('url', '=', 'terms')
                //todo lang
                ->first()
        ]);
    })->name('terms');

    Route::get('/privacy', function () {
        return view('page', [
            'page' => Page::query()
                ->where('url', '=', 'privacy')
                //todo lang
                ->first()
        ]);
    })->name('privacy');

    Route::get('/cookie', function () {
        return view('page', [
            'page' => Page::query()
                ->where('url', '=', 'cookie')
                //todo lang
                ->first()
        ]);
    })->name('cookie');
});

Route::get('update-news', function (NewsService $service, Request $request) {
    $service->updateArticlesFMP($request->page, 100, 'en');
});


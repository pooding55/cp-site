@extends('templates.base')

@section('content')
    <section class="basic">
        <div class="container" id="app">
            <h1 style="font-size: 3em; line-height: 1.2em; margin-bottom: 0;">News</h1>

            <section class="posts-collection" id="posts-index">
                <div class="posts">
                    @foreach($articles as $article)
                        <article class="post-summary post-index" id="post-256293">
                            <div class="wrapper">
                                <figure>
                                    <div class="thumbnail">
                                        <a rel="nofollow" href="{{ route('news.article', ['article' => $article->id]) }}" style="
                                        width: 100%;
                                        height: 100%;
                                        background-size: cover;
                                        background-repeat: no-repeat;
                                        background-position:center;
                                            display: block;
                                            background-image:url('{{ $article->image }}');">
                                        </a>
                                    </div>
                                    <a class="category" rel="tag" href="{{ route('news.article', ['article' => $article->id]) }}">Courses</a>
                                </figure>
                                <div class="content">
                                    <a class="category" rel="tag" href="{{ route('news.article', ['article' => $article->id]) }}">{{ $article->tickers }}</a>
                                    <h3 class="headline"><a rel="nofollow" href="{{ route('news.article', ['article' => $article->id]) }}">{{ $article->title }}</a></h3>
                                    <p class="byline">
                                        <time class="timestamp" datetime="2024-08-21T20:57:00Z"data-relative="true">
                                            {{ $article->date->toDateTimeString() }} by {{ $article->author }}
                                        </time>
                                    </p>
                                    <div class="summary">
                                        <a class="read-more" rel="nofollow" href="{{ route('news.article', ['article' => $article->id]) }}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </article>
                    @endforeach
                    {{ $articles->links() }}
                </div>
            </section>

        </div>
    </section>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        nav {
            margin-top: 10px;
            width: 100%;
        }
    </style>
@endsection

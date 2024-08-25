@extends('templates.base')

@section('content')
    <section class="basic">
        <div id="app" class="container" bis_skin_checked="1">
            <h1>{{ $article->title }}</h1>
            <div style="
                height: 350px;
                width: auto;
                margin-bottom: 25px;
                background-size: cover;
                background-repeat: no-repeat;
                background-position:center;
                display: block;
                background-image:url('{{ $article->image }}');">

            </div>

            {!! $article->content !!}
        </div>
    </section>
@endsection

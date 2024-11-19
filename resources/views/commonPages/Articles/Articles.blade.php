@extends('layouts.base_layout')

@section('page_title', $pageInfo['title'])
@section('description', $pageInfo['description'])
@section('canonical', $pageInfo['canonical'])


@section('content')
    <main>
        <div class="box-container">
            <ul class="breadcrumbs">
                <li><a href="/">Главная</a>&nbsp;<span>-</span>&nbsp;</li>
                <li>Статьи</li>
            </ul>
            <!-- /.breadcrumbs -->

            <h1 class="page-title">Статьи</h1>

            <div class="articles-block">
                @if($articles)
                    @foreach($articles as $article)
                        <a href="/articles/{{$article['id']}}">
                            <div class="articles-block__item">
                                <div class="articles-block__item-img">
                                    <img src="{{$article['thumbnail']}}" alt="">
                                </div>

                                <div class="articles-block__item-text">
                                    <span class="articles-block__item-text-date">{{$article['date']}}</span>
                                    <h2>{{$article['title']}}</h2>
                                    <div class="articles-block__item-text-line"></div>
                                    <p class="articles-block__item-text-description">{{$article['description']}}</p>
                                </div>
                            </div>
                            <!-- /.articles-block__item -->
                        </a>
                    @endforeach
                @endif
            </div>

        </div>
    </main>
@endsection

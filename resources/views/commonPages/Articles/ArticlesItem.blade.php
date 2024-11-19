@extends('layouts.base_layout')

@section('page_title', $pageInfo['title'])
@section('description', $pageInfo['description'])
@section('canonical', $pageInfo['canonical'])


@section('content')
    <main>
        <div class="box-container">
            <ul class="breadcrumbs">
                <li><a href="/">Главная</a>&nbsp;<span>-</span>&nbsp;</li>
                <li><a href="/articles">Статьи</a>&nbsp;<span>-</span>&nbsp;</li>
                <li>{{$pageInfo['title']}}</li>
            </ul>
            <!-- /.breadcrumbs -->

            <h1 class="page-title">{{$pageInfo['title']}}</h1>

            <div class="article-body">
                {!! $html !!}
            </div>
        </div>
    </main>
@endsection

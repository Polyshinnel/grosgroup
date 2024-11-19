@extends('layouts.base_layout')

@section('page_title', $pageInfo['title'])
@section('description', $pageInfo['description'])
@section('canonical', $pageInfo['canonical'])


@section('content')
    <main>
        <div class="box-container">
            <ul class="breadcrumbs">
                <li><a href="/">Главная</a>&nbsp;<span>-</span>&nbsp;</li>
                <li>Наши работы</li>
            </ul>
            <!-- /.breadcrumbs -->

            <h1 class="page-title">Наши работы</h1>

            @if($works)
                <div class="works-block">
                    @foreach($works as $work)
                        <a href="/works/{{$work['id']}}">
                            <div class="works-block__item">
                                <img src="{{$work['thumbnail']}}" alt="">
                                <div class="works-block__item-wrapper">
                                    <p class="work-type">{{$work['type_work']}}</p>
                                    <h2 class="work-title">{{$work['title']}}</h2>
                                    <div class="works-block__item-wrapper-btn">
                                        <p>Смотреть работы</p>
                                    </div>
                                </div>
                                <!-- /.works-block__item-wrapper -->
                            </div>
                            <!-- /.works-block__item -->
                        </a>
                    @endforeach
                </div>
            @endif

        </div>
    </main>
@endsection

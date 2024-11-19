@extends('layouts.base_layout')

@section('page_title', $pageInfo['title'])
@section('description', $pageInfo['description'])
@section('canonical', $pageInfo['canonical'])


@section('content')
    <div class="box-container">
        <ul class="breadcrumbs">
            <li><a href="/">Главная</a>&nbsp;<span>-</span>&nbsp;</li>
            <li><a href="/works">Наши работы</a>&nbsp;<span>-</span>&nbsp;</li>
            <li>{{$work['page_data']['title']}}</li>
        </ul>
        <!-- /.breadcrumbs -->

        <h1 class="page-title">{{$work['page_data']['title']}}</h1>

        <div class="work-block">
            <div class="work-description">
                {!! $work['page_data']['description'] !!}
            </div>

            <div class="work-gallery">
                @if($work['images'])
                    @foreach($work['images'] as $img)
                        <a href="{{$img}}" data-fancybox="gallery">
                            <div class="work-gallery-img">
                                <img src="{{$img}}" alt="">
                            </div>
                        </a>
                    @endforeach
                @endif
            </div>
            <!-- /.work-gallery -->
        </div>
        <!-- /.work-block -->
    </div>

    <script src="/assets/js/fancybox/fancybox.umd.js"></script>
    <script>
        Fancybox.bind("[data-fancybox]", {
            // Your custom options
        });
    </script>
@endsection

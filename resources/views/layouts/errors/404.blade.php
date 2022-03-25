@extends('layouts.app')

@section('content')
    <div class="top">
        @include('layouts.header')
        @include('layouts.navigator', ['items' => array(['label' => __('errors.404.title_main')])])
        <section id="how">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-main">
                        <div class="row row-boxed">
                            <div class="col col-boxed">
                                <div class="legend clearfix">
                                    <span class="legend-left fmedium">{{__('errors.404.title_main')}}</span>
                                </div>
                                <div class="legend-content">
                                    <div class="main-lists">
                                        <div class="main-item">
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div style="padding: 50px 0;font-weight: bold;font-size: 150px;color: #8F8F8F;text-align: center;">{!! __('errors.404.content') !!}</div>
                                                </div>
                                            </div>
                                            <div class="main-item">
                                                {!! __('errors.404.message') !!}
                                            </div>
                                        </div>
                                        <div id="" class="">
                                            <ul class="nav nav-404">
                                                <li class="li-nav-404"><a href="{{ route('top') }}" title="" >Home</a></li>
                                                <span class="li-nav-404">|</span>
                                                <li class="li-nav-404"><a href="{{ route('interaction-list') }}" title="" >Board</a></li>
                                                <span class="li-nav-404">|</span>
                                                <li class="li-nav-404"><a href="#" title="">News</a></li>
                                                <span class="li-nav-404">|</span>
                                                <li class="li-nav-404"><a href="{{ route('links') }}" title="">Links</a></li>
                                                <span class="li-nav-404">|</span>
                                                <li class="li-nav-404"><a href="{{ route('recommend-list') }}" title="">Recommended</a></li>
                                                <span class="li-nav-404">|</span>
                                                <li class="li-nav-404"><a href="{{ route('how-to') }}" title="">How to</a></li>
                                                <span class="li-nav-404">|</span>
                                                <li class="li-nav-404"><a href="mailto:{{ \Auth::user()->email }}" title="">Contact</a></li>
                                                <span class="li-nav-404">|</span>
                                                <li class="li-nav-404"><a href="{{ route('my-page') }}" title="">My Page</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @include('layouts.footer')
    </div>
@endsection
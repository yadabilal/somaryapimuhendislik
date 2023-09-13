@extends('layouts.app')
@section('meta')
    <title> {{$setting->title.' | '.$currentpage->title}}</title>
    <meta name="keywords" content="{{$currentpage->tags}}">
    <meta name="description" content="{{$currentpage->sub_description}}" />
@endsection
@section('content')
    @include('layouts.banner', ['currentpage' => $currentpage, 'homepage' => $homepage])
    @foreach($currentpage->activeChilds as $child)
        @if($child->type == \App\Model\Website\Content::TYPE_SECTION_ONE && $child->activeChilds)

            <div class="our-projects">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="myportfolio-container minimal-light" id="our-projects">
                                <div class="mb-6">
                                    <div class="filter-wrapper">
                                        <a href="#" class="filterbutton selected" data-filter="*">
                                            Tümü
                                        </a>
                                    </div>
                                </div>
                                <div class="portfolio-row">
                                    <div class="portfolioContainer portfolioContainer-full row" id="da-thumbs">
                                        <ul class="project-masonry">
                                            @foreach($child->activeChilds as $activeChild)
                                            <li class="grid-item filter-building our-projects-wrapper col-md-3 col-sm-6 mb-3">
                                                <div class="project-media-cover-wrapper">
                                                    <div class="project-entry-media">
                                                        <img src="{{$activeChild->baseImageUrl()}}" alt="" />
                                                    </div>
                                                    <div class="project-entry-cover">
                                                        <div class="project-overlay our-projects-container"></div>
                                                        <div class="project-content">
                                                            <div class="our-projects-categories">
                                                                <a href="{{$activeChild->getUrl($currentpage)}}">{{$activeChild->sub_title}}</a>
                                                            </div>
                                                            <div class="line-clear"></div>
                                                            <div class="our-projects-title">
                                                                <a href="{{$activeChild->getUrl($currentpage)}}">
                                                                    {{$activeChild->title}}
                                                                </a>
                                                            </div>
                                                            <div class="line-clear"></div>
                                                            <div class="our-projects-popup">
                                                                <a data-rel="prettyPhoto" href="{{$activeChild->baseImageUrl()}}">
                                                                    <i class="fa fa-search"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        @endif
    @endforeach
@endsection


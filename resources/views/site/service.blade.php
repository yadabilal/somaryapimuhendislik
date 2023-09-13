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
            <section class="services-page mt-150">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="service-page-images rmb-150">
                                <div class="faq-left-image" style="background: url({{$child->baseImageUrl()}}) no-repeat center/cover;"></div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="faq-accordion ras-content pt-95 pb-110 rpb-0 rmb-100">
                                <div class="section-title mb-35">
                                    <h6>{{$child->sub_title}}</h6>
                                    <h2>{{$child->title}}
                                        <span class="thin">{{$child->sub_description}}</span>
                                    </h2>
                                </div>
                                <div id="accordion">
                                    @foreach($child->activeChilds as $activeChild)
                                        <div class="card">
                                            <div class="card-header">
                                                <a class="collapsed card-link" data-toggle="collapse" href="#{{$activeChild->url}}">
                                                    {{$activeChild->title}}
                                                </a>
                                            </div>
                                            <div id="{{$activeChild->url}}" class="collapse" data-parent="#accordion">
                                                <div class="card-body">
                                                    {{$activeChild->sub_description}}
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                            <div class="faq-right-bg">
                                <img src="{{$child->backgroundImageUrl()}}" alt="{{$child->title}}">
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if($child->type == \App\Model\Website\Content::TYPE_SECTION_TWO && $child->activeChilds)
            <section class="services-section pt-240 rpt-140 pb-120" style="background-image: url('{{$child->baseImageUrl()}}');">
                <div class="container">
                    <div class="row">
                        @foreach($child->activeChilds as $activeChild)
                            <div class="col-lg-4 col-md-6">
                                <div class="service-item">
                                    <span class="number">0{{$loop->index+1}}</span>
                                    <img src="{{$activeChild->baseImageUrl()}}" alt="{{$activeChild->title}}">
                                    <h3>{{$activeChild->title}}</h3>
                                    {{$activeChild->sub_description}}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>
        @endif

        @if($child->type == \App\Model\Website\Content::TYPE_SECTION_THREE && $child->activeChilds)
            <section class="contact-section mb-250" style="background-image: url('{{$child->baseImageUrl()}}');">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-8 col-lg-10">
                            @include('layouts.form', ['child' => $child->activeChilds[0]])
                        </div>
                    </div>
                </div>
            </section>
            </section>
        @endif

    @endforeach

@endsection


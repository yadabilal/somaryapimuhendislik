@extends('layouts.app')
@section('meta')
    <title> {{$setting->title.' | '.$currentpage->title}}</title>
    <meta name="keywords" content="{{$currentpage->tags}}">
    <meta name="description" content="{{$currentpage->sub_description}}" />
@endsection
@section('content')


    @foreach($childs as $child)
        @if($child->type == \App\Model\Website\Content::TYPE_SECTION_ONE && $child->activeChilds)
            <div class="section">
                <div class="rev_slider_wrapper fullwidthbanner-container">
                    <div id="rev_slider_1" class="rev_slider fullwidthabanner">
                        <ul>
                            @foreach($child->activeChilds as $secondChild)
                            <li data-transition="random" data-slotamount="7" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="300" data-rotate="0"  data-saveperformance="off"  data-title="Slide">
                                <img src="{{$secondChild->baseImageUrl()}}"  alt=""
                                     data-bgposition="center top"
                                     data-kenburns="on"
                                     data-duration="9000"
                                     data-ease="Linear.easeNone"
                                     data-scalestart="100"
                                     data-scaleend="110"
                                     data-rotatestart="0"
                                     data-rotateend="0"
                                     data-offsetstart="0 0"
                                     data-offsetend="0 0"
                                     class="rev-slidebg" />

                                <div class="tp-caption tp-resizeme"
                                     data-x="['left','center','center','center']"
                                     data-hoffset="['0','0','0','0']"
                                     data-y="['top','middle','middle','middle']"
                                     data-voffset="['135','-130','-130','-128']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-visibility="['on','on','on','off']"
                                     data-transform_idle="o:1;"
                                     data-transform_in="x:right;s:250;e:Power3.easeInOut;"
                                     data-transform_out="x:left;s:300;s:300;"
                                     data-start="800"
                                     data-responsive_offset="on">
                                    <img src="{{ asset('theme/new/images/banner/line_01.png')}}" alt="" />
                                </div>

                                <div class="tp-caption tp-resizeme"
                                     data-x="['left','center','center','center']"
                                     data-hoffset="['-1','0','0','0']"
                                     data-y="['top','middle','middle','middle']"
                                     data-voffset="['419','150','150','128']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-visibility="['on','on','on','off']"
                                     data-transform_idle="o:1;"
                                     data-transform_in="x:left;s:250;e:Power3.easeInOut;"
                                     data-transform_out="x:right;s:300;s:300;"
                                     data-start="1000"
                                     data-responsive_offset="on"><img src="{{ asset('theme/new/images/banner/line_01.png')}}" alt="" />
                                </div>

                                <div class="tp-caption tp-resizeme"
                                     data-x="['left','center','center','left']"
                                     data-hoffset="['375','-250','-250','135']"
                                     data-y="['top','middle','middle','top']"
                                     data-voffset="['0','0','0','0']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-visibility="['on','on','on','off']"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:bottom;s:250;e:Power3.easeInOut;"
                                     data-transform_out="y:top;s:300;s:300;"
                                     data-start="1200"
                                     data-responsive_offset="on"><img src="{{ asset('theme/new/images/banner/line_02.png')}}" alt="" />
                                </div>

                                <div class="tp-caption tp-resizeme"
                                     data-x="['left','center','center','left']"
                                     data-hoffset="['890','250','250','635']"
                                     data-y="['top','middle','middle','top']"
                                     data-voffset="['0','0','0','0']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-visibility="['on','on','on','off']"
                                     data-transform_idle="o:1;"
                                     data-transform_in="y:top;s:250;e:Power3.easeInOut;"
                                     data-transform_out="y:bottom;s:300;s:300;"
                                     data-start="1400"
                                     data-responsive_offset="on"><img src="{{ asset('theme/new/images/banner/line_02.png')}}" alt="" />
                                </div>

                                <div class="tp-caption tp-shape tp-shapewrapper tp-resizeme"
                                     data-x="['left','center','center','center']"
                                     data-hoffset="['375','0','0','0']"
                                     data-y="['top','middle','middle','middle']"
                                     data-voffset="['135','0','0','0']"
                                     data-width="['515','500','500','500']"
                                     data-height="['285','280','280','280']"
                                     data-whitespace="['normal','nowrap','nowrap','nowrap']"
                                     data-transform_idle="o:1;"
                                     data-transform_in="z:0;rX:0;rY:0;rZ:0;sX:0.9;sY:0.9;skX:0;skY:0;opacity:0;s:400;e:Power3.easeInOut;"
                                     data-transform_out="opacity:0;s:300;s:300;"
                                     data-start="1600"
                                     data-responsive_offset="on"></div>

                                <div class="tp-caption slide-text-1 tp-resizeme"
                                     data-x="['left','center','center','center']"
                                     data-hoffset="['410','0','0','0']"
                                     data-y="['top','middle','middle','middle']"
                                     data-voffset="['165','-110','-110','-110']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:200;e:Power3.easeInOut;"
                                     data-transform_out="opacity:0;s:300;s:300;"
                                     data-start="2000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on">{{$secondChild->sub_title}}
                                </div>

                                <div class="tp-caption tp-resizeme"
                                     data-x="['left','center','center','center']"
                                     data-hoffset="['410','0','0','0']"
                                     data-y="['top','middle','middle','middle']"
                                     data-voffset="['203','-70','-70','-70']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:200;e:Power3.easeInOut;"
                                     data-transform_out="opacity:0;s:300;s:300;"
                                     data-start="2000"
                                     data-responsive_offset="on"><img src="{{ asset('theme/new/images/banner/line_03.png')}}" alt="" />
                                </div>

                                <div class="tp-caption slide-text-2 tp-resizeme"
                                     data-x="['left','center','center','center']"
                                     data-hoffset="['410','0','0','0']"
                                     data-y="['top','middle','middle','middle']"
                                     data-voffset="['216','-40','-40','-40']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_in="opacity:0;s:200;e:Power3.easeInOut;"
                                     data-transform_out="opacity:0;s:300;s:300;"
                                     data-start="2000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-responsive_offset="on">{{$secondChild->title}}
                                </div>


                                <a   class="tp-caption rev-btn tp-resizeme rev-btn-1"
                                     href="{{$secondChild->getUrl()}}" target="_self"
                                     data-x="['left','center','center','center']"
                                     data-hoffset="['410','-80','-80','-80']"
                                     data-y="['top','middle','middle','middle']"
                                     data-voffset="['338','80','80','80']"
                                     data-width="none"
                                     data-height="none"
                                     data-whitespace="nowrap"
                                     data-transform_idle="o:1;"
                                     data-transform_hover="o:1;rX:0;rY:0;rZ:0;z:0;s:300;e:Power3.easeInOut;"
                                     data-style_hover="c:rgba(0, 45, 104, 1.00);bg:rgba(255, 255, 255, 1.00);"
                                     data-transform_in="opacity:0;s:200;e:Power2.easeInOut;"
                                     data-transform_out="opacity:0;s:300;s:300;"
                                     data-start="2000"
                                     data-splitin="none"
                                     data-splitout="none"
                                     data-actions=''
                                     data-responsive_offset="on">Detay </a>
                            </li>
                            @endforeach
                            </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>
            </div>
        @endif


    @if($child->type == \App\Model\Website\Content::TYPE_SECTION_THREE && $child->activeChilds)
        <div class="section pt-5 pb-3">
            <div class="container">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="mb-3">
                            <div class="section-title">{{$child->title}}</div>
                            <div class="section-desc">
                                <p>
                                    {{$child->sub_description}}
                                </p>
                            </div>
                            <div class="ourservices_btn">
                                <div class="navigationbutton button-left ourservices_btn_left">
                                    <i class="fa fa-angle-left"></i>
                                </div>
                                <div class="navigationbutton button-right ourservices_btn_right">
                                    <i class="fa fa-angle-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="myportfolio-container minimal-light row">
                            <div class="slider-wrapper">
                                <ul class="service-list">
                                    @foreach($child->activeChilds as $secondChild)
                                    <li class="col-md-6 col-sm-6">
                                        <div class="service-item">
                                            <div class="service-entry-media">
                                                <img src="{{$secondChild->baseImageUrl()}}" alt="" />
                                                <div class="service-entry-cover">
                                                    <div class="service-overlay our-services-container"></div>
                                                    <div class="our-services-readmore">
                                                        <a class="our-services-readmore-link" href="{{$secondChild->getUrl()}}">
                                                           Detay
                                                        </a>
                                                    </div>
                                                    <div class="our-services-url">
                                                        <a class="our-services-url-link" href="{{$secondChild->getUrl()}}">
                                                            <i class="fa fa-external-link"></i>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="our-services-content">
                                                <div class="our-services-title">
                                                    <a class="our-services-title-link" href="{{$secondChild->getUrl()}}">
                                                        {{$secondChild->title}}
                                                    </a>
                                                </div>
                                                <div class="our-services-desc">
                                                    {{$secondChild->sub_description}}
                                                </div>
                                                <div class="our-services-readmore-2">
                                                    <a class="our-services-readmore-link-2" href="{{$secondChild->getUrl()}}">
                                                        Detay
                                                    </a>
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
    @endif



    @if($child->type == \App\Model\Website\Content::TYPE_SECTION_FIVE && $child->activeChilds)

        <div class="section pt-5 pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="clients_btn">
                            <div class="section-title">Clients</div>
                            <div class="navigationbutton button-left clients_btn_left">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <div class="navigationbutton button-right clients_btn_right">
                                <i class="fa fa-angle-right"></i>
                            </div>
                        </div>
                        <div class="myportfolio-container minimal-light">
                            <div class="row">
                                <div class="slider-wrapper">
                                    <ul class="client-list">

                                        @foreach($child->activeChilds as $secondChild)
                                            <li class="col-md-2 col-sm-6">
                                                <div class="client-media-cover-wrapper">
                                                    <div class="client-entry-media">
                                                        <img src="{{$secondChild->baseImageUrl()}}" alt="" />
                                                    </div>
                                                    <div class="client-entry-cover">
                                                        <div class="client-overlay home-clients-container"></div>
                                                        <div class="home-clients-title">
                                                            {{$secondChild->title}}
                                                        </div>
                                                    </div>
                                                </div>
                                            </li>
                                            <div class="client-item">
                                                <a href="{{$secondChild->getUrl()}}"><img src="{{$secondChild->baseImageUrl()}}" alt="{{$secondChild->title}}"></a>
                                            </div>
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



    @if($child->type == \App\Model\Website\Content::TYPE_SECTION_SEVEN && $child->activeChilds)

        <div class="section home-latest-projects">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="mb-3 projects_btn">
                            <p>{{$child->title}} </p>
                            <div class="navigationbutton button-left projects_btn_left">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <div class="navigationbutton button-right projects_btn_right">
                                <i class="fa fa-angle-right"></i>
                            </div>
                        </div>
                        <div class="myportfolio-container minimal-light">
                            <div class="slider-wrapper">
                                <div class="row">
                                    <ul class="project-list">
                                        @foreach($child->activeChilds as $secondChild)
                                        <li class="our-projects-wrapper col-md-4 col-sm-6">
                                            <div class="project-media-cover-wrapper">
                                                <div class="project-entry-media">
                                                    <img src="{{$secondChild->baseImageUrl()}}" alt="" />
                                                </div>
                                                <div class="project-entry-cover">
                                                    <div class="project-overlay our-projects-container"></div>
                                                    <div class="project-content">
                                                        <div class="our-projects-categories">
                                                            <a href="{{$secondChild->getUrl()}}">{{$secondChild->title}}</a>
                                                        </div>
                                                        <div class="line-clear"></div>
                                                        <div class="our-projects-title">
                                                            <a href="{{$secondChild->getUrl()}}">
                                                                {{$secondChild->sub_title}}
                                                            </a>
                                                        </div>
                                                        <div class="line-clear"></div>
                                                        <div class="our-projects-popup">
                                                            <a data-rel="prettyPhoto" href="{{$secondChild->backgroundImageUrl()}}">
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


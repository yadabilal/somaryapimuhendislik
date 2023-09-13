<!DOCTYPE html>
<html lang="tr">
<head>
    @include('layouts.meta')
</head>


<body class="header01">
<div id="loading">
    <div id="loading-center">
        <div id="loading-center-absolute">
            <div class="loader">Yükleniyor...</div>
        </div>
    </div>
</div>
@include('layouts.header')
<div class="snap-drawers">
    <div class="snap-drawer snap-drawer-left">
        <div class="mobile-menu">
            <ul class="menu">
                @foreach($menus as $menu)
                    <li class="@if(route('home.list', ['url' => $menu->url]) == url()->current() ||  (url()->current() == route('home') && $menu->type == \App\Model\Website\Content::TYPE_HOME)) current @endif">
                        <a href="{{route('home.list', ['url' => $menu->url])}}">{{$menu->title}}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="snap-drawer snap-drawer-right"></div>
</div>
<div id="page" class="site">
    <div class="top-area site-top hidden-xs hidden-sm">
        <div class="container">
            <div class="row middle">
                <div class="col-md-6">
                    {{$setting->address}}
                </div>
                <div class="col-md-6 text-right">
                    <div class="social-menu">
                        <ul id="social-menu-top" class="menu">
                            @if($setting->twitter)
                                <li><a href="{{$setting->twitter}}">Twitter</a></li>
                            @endif
                            @if($setting->facebook)
                                    <li><a href="{{$setting->facebook}}">Facebook</a></li>
                            @endif
                            @if($setting->instagram)
                                    <li><a href="{{$setting->instagram}}">Instagram</a></li>
                            @endif
                            @if($setting->youtube)
                                    <li><a href="{{$setting->youtube}}">Youtube</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <header class="site-header">
        <nav id="site-navigation" class="main-navigation">
            <div class="main-menu">
                <div class="container">
                    <div class="row middle">
                        <div class="col-md-2 col-xs-8 site-branding">
                            @include('layouts.logo')
                        </div>
                        <div class="col-xs-2 hidden-md hidden-lg end">
                            <i id="open-left" class="fa fa-navicon"></i>
                        </div>
                        <div class="col-md-9 hidden-xs hidden-sm nav-left">
                            <div class="primary-menu">
                                <ul class="menu">

                                    @foreach($menus as $menu)
                                        <li class="@if(route('home.list', ['url' => $menu->url]) == url()->current() ||  (url()->current() == route('home') && $menu->type == \App\Model\Website\Content::TYPE_HOME)) current-menu-item @endif">
                                            <a href="{{route('home.list', ['url' => $menu->url])}}">{{$menu->title}}</a>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
        <!-- #site-navigation -->
    </header>
    <div class="site-content">
        @yield('content')
    </div>
    <footer class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="widget">
                        <a href="{{route('home')}}" class="footer-logo">
                            @if(@$setting)
                                <img src="{{$setting->logoUrl()}}" alt="Logo" style="max-height: 100px">
                            @endif
                        </a>

                        {{$setting->footer_description}}
                    </div>
                    <div class="social">
                        <div class="social-menu">
                            <ul class="menu">
                                @if($setting->twitter)
                                    <li><a href="{{$setting->twitter}}">Twitter</a></li>
                                @endif
                                @if($setting->facebook)
                                    <li><a href="{{$setting->facebook}}">Facebook</a></li>
                                @endif
                                @if($setting->instagram)
                                    <li><a href="{{$setting->instagram}}">Instagram</a></li>
                                @endif
                                @if($setting->youtube)
                                    <li><a href="{{$setting->youtube}}">Youtube</a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="widget">
                        <h3 class="widget-title"><span>Menü</span></h3>
                        <ul class="menu">
                            @foreach($menus as $menu)
                                <li class="@if(route('home.list', ['url' => $menu->url]) == url()->current() ||  (url()->current() == route('home') && $menu->type == \App\Model\Website\Content::TYPE_HOME)) current @endif">
                                    <a href="{{route('home.list', ['url' => $menu->url])}}">{{$menu->title}}</a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="widget">
                        <h3 class="widget-title"><span>{{$dictionary->getValue('footer-contact-title')}}</span></h3>
                        <div class="textwidget">
                            <p><i class="fa fa-map-marker"></i> {{$setting->address}}</p>
                            <p><i class="fa fa-phone"></i>  &nbsp; {{$setting->phone}} </p>
                            <p><i class="fa fa-envelope"></i>  &nbsp; <a href="mailto:{{$setting->email}} ">{{$setting->email}} </a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <div class="container">
            <div class="row middle">
                <div class="col-md-12 end-md end-lg center">
                    © Copyright {{\Carbon\Carbon::now()->year}} by <a>QFS Software</a>
                </div>
            </div>
        </div>
    </div>
</div>
<a class="scrollup"><i class="fa fa-angle-up"></i></a>

@include('layouts.js')


</body>

</html>

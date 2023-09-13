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
            <section class="blog-list mt-150 mb-50">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8">
                            @if($child->activeChilds->isEmpty())
                                <div class="alert alert-info">
                                    {{$dictionary->getValue('sonuc-bulunamadi')}}
                                </div>
                            @endif
                            @foreach($child->activeChilds as $activeChild)
                            <div class="blog-item">
                                <div class="blog-image">
                                    <img src="{{$activeChild->baseImageUrl()}}" alt="{{$activeChild->title}}">
                                    <span class="date">{{$activeChild->getDate()}}</span>
                                </div>
                                <div class="blog-content">
                                    <h3><a href="{{$activeChild->getUrl($currentpage)}}">{{$activeChild->title}}</a></h3>
                                    <ul class="admin-header">
                                        <li><i class="fas fa-user-alt"></i><a>Admin</a></li>
                                        <li><i class="fas fa-fist-raised"></i><a>{{$activeChild->sub_title}}</a></li>
                                    </ul>
                                    <p> {{$activeChild->sub_description}}</p>
                                    <a href="{{$activeChild->getUrl($currentpage)}}" class="read-more">{{$dictionary->getValue('buton-daha-fazla')}}</a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="col-lg-4">
                            <div class="sidebar ml-95 rml-0 rmt-100">
                                <div class="widget widget-search">
                                    <h3 class="widget-title">{{$dictionary->getValue('baslik-arama-yap')}}</h3>
                                    <form method="get" class="search-form">
                                        <input type="search" name="search" value="{{@request()->get('search')}}">
                                        <button type="submit" class="theme-btn">{{$dictionary->getValue('button-ara')}}</button>
                                    </form>
                                </div>
                                <div class="widget widget-recent-posts">
                                    <h3 class="widget-title">{{$dictionary->getValue('baslik-son-yazilar')}}</h3>
                                    <div class="post-list">
                                        <ul class="list-style-one">
                                            <?php $lastContents = \App\Model\Website\Content::lastContent($child->id);?>
                                            @foreach($lastContents as $lastContent)
                                            <li><a href="{{$lastContent->getUrl($currentpage)}}">{{$lastContent->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </section>

        @endif

    @endforeach

@endsection


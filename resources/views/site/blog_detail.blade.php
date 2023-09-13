@extends('layouts.app')
@section('meta')
    <title> {{$setting->title.' | '.$model->title}}</title>
    <meta name="keywords" content="{{$model->tags}}">
    <meta name="description" content="{{$model->sub_description}}" />
@endsection
@section('content')
    @include('layouts.banner', ['currentpage' => $currentpage, 'homepage' => $homepage])

    <section class="blog-single mt-150 mb-50">
        <div class="container">
            <div class="blog-image">
                <img src="{{$model->baseImageUrl()}}" alt="{{$model->title}}">
                <span class="date">{{$model->getDate()}}</span>
            </div>
            <h3 class="blog-title">{{$model->title}}</h3>
            <ul class="admin-header">
                <li><i class="fas fa-user-alt"></i><a>Admin</a></li>
                <li><i class="fas fa-fist-raised"></i><a>{{$model->sub_title}}</a></li>
            </ul>
            <p>{!! $model->description !!}</p>
        </div>
    </section>
@endsection


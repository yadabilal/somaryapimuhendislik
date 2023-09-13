@extends('layouts.app')
@section('meta')
    <title> {{$setting->title.' | '.$model->title}}</title>
    <meta name="keywords" content="{{$model->tags}}">
    <meta name="description" content="{{$model->sub_description}}" />
@endsection
@section('content')
    @include('layouts.banner', ['currentpage' => $currentpage, 'homepage' => $homepage])

    <div class="main">
        <div class="single-project">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="gallery tm-gallery">
                            <div class="tm-nav">
                                <span class="tm-next"><i class="fa fa-angle-right"></i></span>
                                <span class="tm-prev"><i class="fa fa-angle-left"></i></span>
                            </div>
                            <div class="project-slider">
                                <img width="1900" height="1268" src="{{$model->baseImageUrl()}}" alt="{{$model->title}}" />
                                <?php $sliderImages = $model->sliderImageUrls();?>
                                @foreach($sliderImages as $sliderImage)
                                    <img width="1900" height="1267" src="{{$sliderImage}}" alt="{{$model->title}}" />
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="single-project-description">
                            <h3 class="heading-title">{{$model->title}}</h3>
                            <p>
                                {{$model->sub_description}}

                            </p>
                        </div>
                        <div class="project-meta">
                            <div class="project-meta__content">
                                {!! $model->description !!}
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection


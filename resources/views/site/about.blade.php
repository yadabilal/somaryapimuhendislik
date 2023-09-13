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

            @foreach($child->activeChilds as $activeChild)
                <div class="main">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-12 col-md-offset-2">
                                <div class="our_services_heading3 mb-2">
                                    <div>{{$activeChild->title}}</div>
                                </div>

                                {!! $activeChild->description !!}
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

             @endif

    @endforeach

@endsection


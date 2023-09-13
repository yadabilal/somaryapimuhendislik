<div class="big-title" style="background: url({{$currentpage->baseImageUrl()}});">
    <div class="container">
        <h1 class="entry-title">{{$currentpage->title}}</h1>
        <div class="breadcrumb">
            <div class="container">
                <ul class="tm_bread_crumb">
                    <li class="top"><a href="{{route('home')}}">{{$homepage->title}}</a></li>
                    <li class="sub tail current" aria-current="page">{{$currentpage->title}}</li>
                </ul>
            </div>
        </div>
    </div>
</div>

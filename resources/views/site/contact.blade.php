@extends('layouts.app')
@section('meta')
    <title> {{$setting->title.' | '.$currentpage->title}}</title>
    <meta name="keywords" content="{{$currentpage->tags}}">
    <meta name="description" content="{{$currentpage->sub_description}}" />

@endsection
@section('content')
    @include('layouts.banner', ['currentpage' => $currentpage, 'homepage' => $homepage])

    @foreach($currentpage->activeChilds as $child)
        @if($child->type == \App\Model\Website\Content::TYPE_SECTION_ONE)
            <div class="contact-map" id="map"></div>

            <div class="section section-contact">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-8">
                            <div class="mb-2">
                                <div id="map-canvas" data-address="{{$setting->address}}" data-height="370" data-width="100%" data-zoom="16" data-map_type="roadmap" data-map_style="default"></div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="contact-info">
                                <p><i class="fa fa-map-marker"></i>{{$setting->address}}</p>
                                <p><i class="fa fa-phone"></i> {{$setting->phone}}</p>
                                <p><i class="fa fa-envelope"></i>{{$setting->email}}</p>
                                <p><i class="fa fa-fax"></i> {{$setting->website}}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endif

        @if($child->type == \App\Model\Website\Content::TYPE_SECTION_THREE)

            <div class="section section-contact">
                <div class="container">
                    <div class="row">
                        @include('layouts.form', ['child' => $child->activeChilds[0] , 'class' => ' bg-light'])
                    </div>
                </div>
            </div>

        @endif

    @endforeach


    <script>
    var lat = {{$setting->lat}};
    var lng = {{$setting->lng}};

    function initMap() {
  const myLatLng = { lat: lat, lng: lng };
  const map = new google.maps.Map(document.getElementById("map-canvas"), {
    zoom: 4,
    center: myLatLng,
  });

  new google.maps.Marker({
    position: myLatLng,
    map
  });
}

window.initMap = initMap;
</script>
@endsection



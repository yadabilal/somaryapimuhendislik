<a href="{{route('home')}}">
    @if(@$setting)
    <img src="{{$setting->logoUrl()}}" alt="Logo" style="max-height: 100px">
    @endif
</a>

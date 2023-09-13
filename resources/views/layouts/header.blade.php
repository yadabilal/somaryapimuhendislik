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

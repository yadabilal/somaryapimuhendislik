<!DOCTYPE html>
<html lang="tr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
  <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
  <title>Admin Paneli</title>
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600,700" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('preadmin/css/bootstrap.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('preadmin/css/font-awesome.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('preadmin/css/fullcalendar.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('preadmin/css/dataTables.bootstrap4.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('preadmin/css/select2.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('preadmin/css/bootstrap-datetimepicker.min.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('preadmin/plugins/morris/morris.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('preadmin/css/tagsinput.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('preadmin/plugins/summernote/dist/summernote-bs4.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('preadmin/css/style.css') }}">
  <!--[if lt IE 9]>
  <script src="{{ asset('preadmin/js/html5shiv.min.js') }}"></script>
  <script src="{{ asset('preadmin/js/respond.min.js') }}"></script>
  <![endif]-->
</head>

<body>
<div class="main-wrapper">
  <div class="header">
    <div class="header-left">
        @include('layouts.logo')
    </div>
    <div class="page-title-box pull-left">
    </div>
    <a id="mobile_btn" class="mobile_btn pull-left" href="#sidebar"><i class="fa fa-bars" aria-hidden="true"></i></a>
    <ul class="nav user-menu pull-right">
      <li class="nav-item dropdown has-arrow">
        <a href="#" class="dropdown-toggle nav-link user-link" data-toggle="dropdown">
                        <span class="user-img">
							<img class="rounded-circle" src="{{asset('preadmin/img/user.jpg')}}" width="40" alt="Admin">
							<span class="status online"></span>
						</span>
          <span>{{\Illuminate\Support\Facades\Auth::user()->name}}</span>
        </a>
        <div class="dropdown-menu">
          <a class="dropdown-item" href="{{route('admin.password')}}">Şifre Değiştir</a>

          <a class="dropdown-item" href="{{ route('logout') }}"
              onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
          >Çıkış Yap</a>
        </div>
      </li>
    </ul>
    <div class="dropdown mobile-user-menu pull-right">
      <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
      <div class="dropdown-menu dropdown-menu-right">
        <a class="dropdown-item" href="{{route('admin.password')}}">Şifre Değiştir</a>
        <a class="dropdown-item" href="{{ route('logout') }}"
            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
        >Çıkış Yap</a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          @csrf
        </form>
      </div>
    </div>
  </div>
  <div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
      <div id="sidebar-menu" class="sidebar-menu">
        <ul>
            @foreach($menus as $menu)
              <li class="{{$parentId == $menu->id? 'active': ''}}">
                <a href="{{route('admin.user.proccess', ['parentId' => $menu->id])}}">
                    <i class="status {{$menu->publish ? 'online' : 'offline'}}"></i> {{$menu->title}}</a>
              </li>
            @endforeach


                <li class="submenu">
                    <a href="#"><i class="fa fa-cog" aria-hidden="true"></i> <span> Ayarlar</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled" style="display: none;">
                        <li class="{{request()->url() == route('admin.setting.index') ? 'active': ''}}">
                            <a href="{{route('admin.setting.index')}}"> Site Ayarı</a>
                        </li>
                        <li class="{{request()->url() == route('admin.dictionary.index') ? 'active': ''}}">
                            <a href="{{route('admin.dictionary.index')}}">Sözlük</a>
                        </li>
                    </ul>
                </li>

                <li class="submenu">
                    <a href="#" ><i class="fa fa-commenting-o" aria-hidden="true"></i> <span> İletişim</span> <span class="menu-arrow"></span></a>
                    <ul class="list-unstyled" style="display: none;">
                        <li class="{{request()->url() == route('admin.contact.index') ? 'active': ''}}">
                            <a href="{{route('admin.contact.index')}}"> Mesajlar</a>
                        </li>
                        <li class="{{request()->url() == route('admin.contact.subscription') ? 'active': ''}}">
                            <a href="{{route('admin.contact.subscription')}}"> Abonelikler</a>
                        </li>
                    </ul>
                </li>

        </ul>
      </div>
    </div>
  </div>
  <div class="page-wrapper">
    <div class="content container-fluid">
      @yield('content')
    </div>
  </div>
</div>
<div class="sidebar-overlay" data-reff=""></div>
<script type="text/javascript" src="{{ asset('preadmin/js/jquery-3.2.1.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('preadmin/js/popper.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('preadmin/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('preadmin/js/jquery.slimscroll.js') }}"></script>
<script type="text/javascript" src="{{ asset('preadmin/js/select2.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('preadmin/js/moment.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('preadmin/js/bootstrap-datetimepicker.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('preadmin/plugins/morris/morris.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('preadmin/plugins/raphael/raphael-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('preadmin/js/tagsinput.js') }}"></script>
<script type="text/javascript" src="{{ asset('preadmin/plugins/summernote/dist/summernote-bs4.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('preadmin/js/app.js') }}"></script>
<script>
  var csrf_token= '{{csrf_token()}}';
  $('.title').keyup(function () {
    var title = $(this).val();
    $.ajax({
      url: '{{url('admin/url-olustur')}}',
      data: {_token: csrf_token, title: title},
      type: 'POST',
      dataType: 'JSON',
      success: function (data) {
        if(data.success) {
          $('.url').val(data.url);
        }
      },
    });
  });
</script>
</body>

</html>

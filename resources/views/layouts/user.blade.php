<!DOCTYPE html>
<html lang="tr">
<head>
  @include('layouts.meta')
</head>

<body class="is-white">
@include('layouts.header')

<div class="view-wrapper">

  <div class="questions-nav actives">
    <div class="inner is-scrollable">
      <div class="container">
        <div class="questions-nav-menu">
          <a href="{{route('profile')}}" class="menu-item">
            <i data-feather="user"></i>
            <span>Profil</span>
          </a>
          <a href="{{route('book')}}" class="menu-item">
            <i data-feather="book"></i>
            <span>Kitaplık</span>
          </a>
          <a href="{{route('shop')}}" class="menu-item">
            <i data-feather="shopping-bag"></i>
            <span>Kitap İstekleri</span>
          </a>
          <a href="{{route('balance')}}" class="menu-item">
            <i data-feather="credit-card"></i>
            <span>Bakiye Geçmişi</span>
          </a>
          <a href="{{route('notification')}}" class="menu-item">
            <i data-feather="bell"></i>
            <span>Bildirimler</span>
          </a>
          <a href="{{route('security')}}" class="menu-item">
            <i data-feather="lock"></i>
            <span>Güvenlik Ve Şifre</span>
          </a>
          <a href="{{route('permission')}}" class="menu-item">
            <i data-feather="settings"></i>
            <span>İzinler Ve Ayarlar</span>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!-- Question wrap -->
  <div class="questions-wrap is-smaller">
    <!-- Container -->
    <div class="container">
      <div class="columns true-dom">
        <div class="column is-3">
          <ul class="questions-menu questions-menu-fixed">
            <li>
              <a href="{{route('profile')}}">
                <i data-feather="user"></i>
                <span>Profil</span>
              </a>
            </li>
            <li>
              <a href="{{route('book')}}">
                <i data-feather="book"></i>
                <span>Kitaplık</span>
              </a>
            </li>
            <li>
              <a href="{{route('shop')}}">
                <i data-feather="shopping-bag"></i>
                <span>Kitap İstekleri</span>
              </a>
            </li>
            <li>
              <a href="{{route('balance')}}">
                <i data-feather="credit-card"></i>
                <span>Bakiye Geçmişi</span>
              </a>
            </li>
            <li>
              <a href="{{route('notification')}}">
                <i data-feather="bell"></i>
                <span>Bildirimler</span>
              </a>
            </li>
            <li>
              <a href="{{route('security')}}">
                <i data-feather="lock"></i>
                <span>Güvenlik Ve Şifre</span>
              </a>
            </li>
            <li>
              <a href="{{route('permission')}}">
                <i data-feather="settings"></i>
                <span>İzinler Ve Ayarlar</span>
              </a>
            </li>
          </ul>

          <ul class="questions-menu">
            <li>
              <a href="{{route('profile')}}">
                <i data-feather="user"></i>
                <span>Profil</span>
              </a>
            </li>
            <li>
              <a href="{{route('book')}}">
                <i data-feather="book"></i>
                <span>Kitaplık</span>
              </a>
            </li>
            <li>
              <a href="{{route('shop')}}">
                <i data-feather="shopping-bag"></i>
                <span>Kitap İstekleri</span>
              </a>
            </li>
            <li>
              <a href="{{route('balance')}}">
                <i data-feather="credit-card"></i>
                <span>Bakiye Geçmişi</span>
              </a>
            </li>
            <li>
              <a href="{{route('notification')}}">
                <i data-feather="bell"></i>
                <span>Bildirimler</span>
              </a>
            </li>
            <li>
              <a href="{{route('security')}}">
                <i data-feather="lock"></i>
                <span>Güvenlik Ve Şifre</span>
              </a>
            </li>
            <li>
              <a href="{{route('permission')}}">
                <i data-feather="settings"></i>
                <span>İzinler Ve Ayarlar</span>
              </a>
            </li>
          </ul>
        </div>
        <div class="column {{request()->url()==route('book') ? 'is-9': 'is-6'}}">
          @yield('content')
        </div>
        <div class="column is-3 {{request()->url()==route('book') ? 'hidden': ''}}">
          <div class="questions-side-card">
            <img src="{{asset('theme/assets/img/icons/questions/help.svg')}}" alt="">
            <h4>Yardım Merkezi</h4>
            <p>Gizlilik ya da diğer türlü endişelerin mi var? Sözleşme ve kurallara <a href="{{route('contract')}}" target="_blank" class="standard-link">buradan</a> ulaşabilirsin.
            </p>
          </div>

          <div class="questions-side-card">
            <img src="{{asset('theme/assets/img/icons/questions/assistance.svg')}}" alt="">
            <h4>7/24 Destek</h4>
            <p>Birkitapbul.com'u kullanırken herhangi bir problem mi yaşıyorsun? <a href="{{route('contact')}}" class="standard-link">Buradan</a> bildir bize.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include('layouts.js')
</body>
</html>
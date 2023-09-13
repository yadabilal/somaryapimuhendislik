<!DOCTYPE html>
<html lang="tr">

<head>
  @include('layouts.help.css')
</head>

<body>

@include('layouts.help.preloader')
@include('layouts.help.header')
<div class="view-wrapper is-full">
  <div class="settings-sidebar is-active">
    <div class="settings-sidebar-inner">
      <div class="user-block">
        <a class="close-settings-sidebar is-hidden">
          <i data-feather="x"></i>
        </a>
        <div class="avatar-wrap">
          <img src="{{ asset('theme/assets/img/avatars/jenna.png') }}" data-user-popover="0"
              alt="">
          <div class="badge">
            <i data-feather="check"></i>
          </div>
        </div>
        <h4>Jenna Davis</h4>
        <p>Melbourne, AU</p>
      </div>
      <div class="user-menu">
        <div class="user-menu-inner has-slimscroll">
          <div class="menu-block">
            <ul>
              <li data-section="general" class="is-active">
                <a>
                  <i data-feather="settings"></i>
                  <span>Genel</span>
                </a>
              </li>
              <li data-section="security">
                <a>
                  <i data-feather="shield"></i>
                  <span>Güvenlik</span>
                </a>
              </li>
              <li data-section="address">
                <a>
                  <i data-feather="map-pin"></i>
                  <span>Adres</span>
                </a>
              </li>
              <li data-section="personal">
                <a>
                  <i data-feather="alert-triangle"></i>
                  <span>Hesap</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="separator"></div>
          <div class="menu-block">
            <ul>
              <li data-section="privacy">
                <a>
                  <i data-feather="lock"></i>
                  <span>Privacy</span>
                </a>
              </li>
              <li data-section="preferences">
                <a>
                  <i data-feather="sliders"></i>
                  <span>Preferences</span>
                </a>
              </li>
            </ul>
          </div>
          <div class="separator"></div>
          <div class="menu-block">
            <ul>
              <li data-section="notifications">
                <a>
                  <i data-feather="bell"></i>
                  <span>Bildirimler</span>
                </a>
              </li>
              <li data-section="support">
                <a>
                  <i data-feather="life-buoy"></i>
                  <span>Yardım</span>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
@yield('content')
</div>

@include('layouts.help.application-modal')
@include('layouts.help.js')
</html>
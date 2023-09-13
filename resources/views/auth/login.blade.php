@extends('layouts.auth')
@section('meta')
  <title> Bir Kitap Bul | İkinci El Ücretsiz Kitap Platformu | Giriş Yap</title>
  <meta name="keywords" content="">
  <meta name="description" content="" />
@endsection
@section('content')

  <div class="outer-panel">
    <div class="outer-panel-inner">

      <div class="process-panel-wrap is-active">
        <form method="POST" action="{{ url('giris-yap') }}">
          @csrf
        <div class="form-panel">
          <div class="title-wrap">
            <h2>Giriş Yap</h2>
            <p>Giriş yaparak; yeni kitaplar ekleyebilir, ücretsiz kitaplara sahip olabilirsin.</p>
          </div>
          <div class="field">
            <label>Kullanıcı</label>
            <div class="control has-validation {{ $errors->has('username') || $errors->has('phone') ? ' has-error' : '' }}">
              <input type="text" name="login" class="input required username" placeholder="Kullanıcı adı ya da telefon numarası" value="{{ old('username') ?: old('phone') }}">
              @error('username')
                <p class="text-error">{{$message}}</p>
              @enderror
              @error('phone')
              <p class="text-error">{{$message}}</p>
              @enderror
            </div>
          </div>
          <div class="field">
            <label>Şifre</label>
            <div class="control">
              <input type="password" class="input required" placeholder="Şifre" name="password" value="{{ old('password') ?: '' }}">
            </div>
          </div>
          <div class="control">
            <button class="button buttonDisable is-solid accent-button raised  is-fullwidth" type="submit">Giriş Yap</button>
          </div>

          <div class="auth-links">
            <div class="has-text-centered">
              Henüz bir hesabın yok mu? <a href="{{ url('kayit-ol') }}">Kaydol.</a>
            </div>
            <div class="has-text-centered">
              <a href="{{ url('sifremi-unuttum') }}">Şifreni mi unuttun?</a>
            </div>
          </div>
        </div>
        </form>
      </div>
    </div>
  </div>

@endsection

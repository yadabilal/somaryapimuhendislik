@extends('layouts.auth')
<title> Bir Kitap Bul | İkinci El Ücretsiz Kitap Platformu | Kayıt Ol</title>
<meta name="keywords" content="">
<meta name="description" content="" />
@section('content')

  <div class="outer-panel">
    <div class="outer-panel-inner">

      <div class="process-panel-wrap is-active">
        <form method="POST" action="{{ url('kayit-ol') }}">
          @csrf
          <div class="form-panel">
            <div class="title-wrap">
              <h2>Kaydol</h2>
              <p>Okumak istediğin kitaplara ücretsiz sahip olmak ya da okurlara ücretsiz kitap göndermek için kaydol.</p>
            </div>
            <div class="field">
              <label>Adın*</label>
              <div class="control has-validation {{ $errors->has('name') ? ' has-error' : '' }}">
                <input type="text" name="name" class="input required" placeholder="Adın*" value="{{ old('name') ?: '' }}" maxlength="25">
                @error('name')
                <p class="text-error">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="field">
              <label>Soyadın*</label>
              <div class="control has-validation {{ $errors->has('surname') ? ' has-error' : '' }}">
                <input type="text" name="surname" class="input required" placeholder="Soyadın*" value="{{ old('surname') ?: '' }}" maxlength="30">
                @error('surname')
                <p class="text-error">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="field">
              <label>Telefon Numaran*</label>
              <div class="control has-validation {{ $errors->has('phone') ? ' has-error' : '' }}">
                <input type="text" name="phone" class="input required phone" placeholder="Onay Kodu Gelecektir." value="{{ old('phone') ?: '' }}" maxlength="14">
                @error('phone')
                <p class="text-error">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="field">
              <label>Şifren*</label>
              <div class="control">
                <input type="password" class="input required" placeholder="Şifren*" name="password" value="{{ old('password') ?: '' }}">
                @error('password')
                <p class="text-error">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="control">
              <button
                  data-action="{{route('auth.check')}}"
                  class="button buttonDisable is-solid accent-button raised  is-fullwidth btn-register"
                  type="button">Kaydol</button>
            </div>
            <div class="warning-wrapper">
              <p>Kaydolarak, <a href="{{route('contract.personal')}}" target="_blank">Koşullar'ı</a> ve
                <a href="{{route('contract.protected')}}" target="_blank">Çerez İlkeleri'ni</a> kabul etmiş olursun.</p>
            </div>
            <div class="has-text-centered">
              Hesabın var mı? <a href="{{ url('giris-yap') }}">Giriş Yap.</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection

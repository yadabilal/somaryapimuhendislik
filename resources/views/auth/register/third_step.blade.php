@extends('layouts.auth')
<title> Bir Kitap Bul | İkinci El Ücretsiz Kitap Platformu | Kullanıcı Adı Belirle</title>
<meta name="keywords" content="">
<meta name="description" content="" />
@section('content')

  <div class="outer-panel">
    <div class="outer-panel-inner">

      <div class="process-panel-wrap is-active">
        <form method="POST" action="{{ url('kayit-ol/kullanici-adi-belirle') }}">
          @csrf
          <div class="form-panel">
            <div class="title-wrap">
              <h2>Kullanıcı Adı</h2>
              <p>Sana kısaca nasıl hitap edelim?</p>
            </div>
            <div class="field">
              <label>Kullanıcı Adın*</label>
              <div class="control has-validation {{ $errors->has('username') ? ' has-error' : '' }}">
                <input type="text" name="username" class="input required" placeholder="Arkadaşların kısaca sana nasıl hitap eder?" value="{{ old('username') ?: '' }}">
                @error('username')
                <p class="text-error">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="control">
              <button data-action="{{route('auth.check')}}"
                  class="button buttonDisable is-solid accent-button raised  is-fullwidth btn-register" type="button">Tamamla</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection

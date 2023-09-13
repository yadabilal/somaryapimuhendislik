@extends('layouts.auth')
<title> Bir Kitap Bul | İkinci El Ücretsiz Kitap Platformu | Yeni Bir Numara</title>
<meta name="keywords" content="">
<meta name="description" content="" />
@section('content')

  <div class="outer-panel">
    <div class="outer-panel-inner">

      <div class="process-panel-wrap is-active">
        <form method="POST" action="{{ url('kayit-ol/yeni-numara') }}">
          @csrf
          <div class="form-panel">
            <div class="title-wrap">
              <h2>Yeni Bir Numara Belirle</h2>
              <p>Mutlu olacağın haberler almak için yeni numarana belirle.</p>
            </div>
            <div class="field">
              <label>Telefon Numaran*</label>
              <div class="control has-validation {{ $errors->has('phone') ? ' has-error' : '' }}">
                <input type="hidden" name="new_phone" value="1">
                <input type="text" name="phone" class="input required phone" placeholder="Yeni telefon numaranı gir." value="{{ old('phone') ?: (@\Illuminate\Support\Facades\Auth::user()->phone ? : '') }}" maxlength="14">
                @error('phone')
                <p class="text-error">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="control">
              <button data-action="{{route('auth.check')}}"
                  class="button buttonDisable is-solid accent-button raised  is-fullwidth btn-register" type="button">Onay Kodu Gönder</button>

            </div>
            <div class="control pt-10">
              <a href="{{url()->previous()}}"
                  class="button  is-solid red-button raised  is-fullwidth" type="button">Geri Dön</a>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection

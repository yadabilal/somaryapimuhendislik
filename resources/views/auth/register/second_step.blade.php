@extends('layouts.auth')
<title> Bir Kitap Bul | İkinci El Ücretsiz Kitap Platformu | Telefon Onayla</title>
<meta name="keywords" content="">
<meta name="description" content="" />
@section('content')

  <div class="outer-panel">
    <div class="outer-panel-inner">

      <div class="process-panel-wrap is-active">
        <form method="POST" action="{{ url('kayit-ol/telefon-onayla') }}">
          @csrf
          <div class="form-panel">
            <div class="title-wrap">
              <h2>Telefonunu Onayla</h2>
              <p>Mutlu olacağın haberler almak için
                <a>{{\App\Model\Setting::by_key('phone')}}</a>
                 numaramızdan gelen kodu girerek
                 telefonunu onayla. <a id="timeBack"></a></p>
            </div>
            <div class="field">
              <label>Onay Kodun*</label>
              <div class="control has-validation {{ $errors->has('code') ? ' has-error' : '' }}">
                <input type="text" name="code" class="input required" placeholder="05** *** **{{\Illuminate\Support\Str::substr($user->phone, -2)}} numarasına gelen kodu gir." value="{{ old('code') ?: '' }}" maxlength="4">
                @error('code')
                <p class="text-error">{{$message}}</p>
                @enderror
              </div>
            </div>
            <div class="control">
              <button data-action="{{route('auth.check')}}"
                  class="button buttonDisable is-solid accent-button raised  is-fullwidth btn-register" type="button">Onayla</button>
            </div>
            <div class="warning-wrapper">
              <p>Kod almadıysan, <a class="new-code" data-action="{{route('auth.second')}}">Yeni Kod Gönderelim</a> ya da  <a href="{{url('kayit-ol/yeni-numara')}}">Numaranı Değiştir</a>.</p>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>

@endsection

@push('page-scripts')
<script>
  send_at = new Date("{{$time}}");
</script>
@endpush

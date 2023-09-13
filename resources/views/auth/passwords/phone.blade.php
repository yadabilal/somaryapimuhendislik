@extends('layouts.auth')
@section('content')

    <div class="outer-panel">
        <div class="outer-panel-inner">
            <div class="process-panel-wrap is-active">
                <form method="POST" action="{{ url('sifremi-unuttum') }}">
                    @csrf
                    <div class="form-panel">
                        <div class="title-wrap">
                            <h2>Giriş Yaparken Sorun mu Yaşıyorsun?</h2>
                            <p>Kullanıcı adını veya telefon numaranı gir ve
                               hesabına yeniden girebilmen için
                                <a>{{\App\Model\Setting::by_key('phone')}}</a>
                               numaramızdan sana yeni bir şifre gönderelim.
                            </p>
                        </div>
                        <div class="field">
                            <label>Kullanıcı</label>
                            <div class="control has-validation {{ $errors->has('username') || $errors->has('phone') ? ' has-error' : '' }}">
                                <input type="text" name="login" class="input required username" placeholder="Kullanıcı adın ya da telefon numaran" value="{{ old('username') ?: old('phone') }}">
                                @error('username')
                                <p class="text-error">{{$message}}</p>
                                @enderror
                                @error('phone')
                                <p class="text-error">{{$message}}</p>
                                @enderror
                            </div>
                        </div>
                        <div class="control">
                            <button class="button buttonDisable is-solid accent-button raised  is-fullwidth" type="submit">Şifremi Sıfırla</button>
                        </div>
                        <div class="auth-links">
                            <div class="has-text-centered">
                                <a href="{{ url('kayit-ol') }}">Yeni Hesap Oluştur</a>
                            </div>
                            <div class="has-text-centered">
                                <a href="{{ url('giris-yap') }}">Giriş Yap</a>
                            </div>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>

@endsection


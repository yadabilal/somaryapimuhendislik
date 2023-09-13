<!DOCTYPE html>
<html lang="tr">
<head>
  @include('layouts.meta')
</head>

<body>
    <div class="page-wrapper">
        <div class="preloader"></div>
        @include('layouts.header')
        <div class="form-back-drop"></div>
        <section class="hidden-bar">
            <div class="inner-box text-center">
                <div class="cross-icon"><span class="fa fa-times"></span></div>
                <div class="title">
                    <h3>{{$dictionary->getValue('form-baslik')}}</h3>
                </div>

                <div class="appointment-form">
                    <form class="form-contact">
                        <div class="alert alert-contact-form"></div>
                        @csrf
                        <div class="form-group">
                            <input type="text" name="full_name" class="full_name" value="" placeholder="{{$dictionary->getValue('input-ad-soyad')}}" required maxlength="150">
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="email" placeholder="{{$dictionary->getValue('input-email')}}" required maxlength="150">
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="phone" value="" placeholder="{{$dictionary->getValue('input-telefon')}}" required maxlength="15">
                        </div>
                        <div class="form-group">
                            <textarea name="message" class="message" placeholder="{{$dictionary->getValue('input-mesaj')}}" rows="5" maxlength="255"></textarea>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="theme-btn btn-contact-form">{{$dictionary->getValue('buton-gonder')}}</button>
                        </div>
                    </form>
                </div>
                <div class="social-icons">
                    @if($setting->twitter)
                        <a href="{{$setting->twitter}}"><i class="fab fa-twitter"></i></a>
                    @endif
                    @if($setting->facebook)
                        <a href="{{$setting->facebook}}"><i class="fab fa-facebook-f"></i></a>
                    @endif
                    @if($setting->instagram)
                        <a href="{{$setting->instagram}}"><i class="fab fa-instagram"></i></a>
                    @endif
                    @if($setting->youtube)
                        <a href="{{$setting->youtube}}"><i class="fab fa-youtube"></i></a>
                    @endif
                </div>
            </div>
        </section>
        @yield('content')
        <section class="call-action">
            <div class="container">
                <div class="call-action-inner">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                            <div class="section-title text-white rmb-35">
                                <h6>{{$dictionary->getValue('baslik-abone-ol')}}</h6>
                                <h2>{{$dictionary->getValue('aciklama-abone-ol')}}</h2>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="alert alert-subscribe"></div>
                            <form class="subscribe">
                                @csrf
                                <input type="email" name="email" class="email" placeholder="{{$dictionary->getValue('input-email')}}" required maxlength="150">
                                <button type="submit" class="theme-btn style-two button-subscribe">{{$dictionary->getValue('buton-gonder')}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer-section pt-220" style="background-image: url('{{asset('theme/assets/images/footer.png')}}');">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-lg-8">
                        <div class="instagram-posts">
                            @foreach($setting->instagram() as $post)
                            <div class="instagram-item">
                                <img src="{{$post['image_url']}}" alt="Instagram">
                                <div class="instagram-overlay">
                                    <a href="{{$post['url']}}"><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-4">
                        <div class="contact-widget">
                            <h3>{{$dictionary->getValue('footer-contact-title')}}</h3>
                            <h6>{{$setting->footer_description}}</h6>
                            <h6>{{$setting->address}}</h6>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom Area-->
            <div class="footer-bottom mt-55">
                <div class="container">
                    <div class="bottom-inner">
                        <div class="social-icons">
                            @if($setting->twitter)
                                <a href="{{$setting->twitter}}"><i class="fab fa-twitter"></i></a>
                            @endif
                            @if($setting->facebook)
                                    <a href="{{$setting->facebook}}"><i class="fab fa-facebook-f"></i></a>
                            @endif
                            @if($setting->instagram)
                                    <a href="{{$setting->instagram}}"><i class="fab fa-instagram"></i></a>
                             @endif
                             @if($setting->youtube)
                                    <a href="{{$setting->youtube}}"><i class="fab fa-youtube"></i></a>
                             @endif
                        </div>
                        <div class="copyright">
                            <p>© Copyright {{\Carbon\Carbon::now()->year}} by <a>QFS Software</a></p>
                        </div>
                    </div>
                </div>
            </div>

        </footer>
    </div>
@include('layouts.js')
</body>
</html>

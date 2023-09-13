@extends('admin.layouts.app')
@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h4 class="page-title">Ayarlar</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form method="post" enctype="multipart/form-data" method="{{route('admin.setting.save')}}">
                    @csrf
                    <div class="form-group">
                        <label>Başlık</label>
                        <input class="form-control" type="text" name="title" value="{{old('title', @$model->title)}}" maxlength="150">
                        @error('title')
                        <small class="form-text text-muted">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Adres</label>
                        <input class="form-control" type="text" name="address" value="{{old('address', @$model->address)}}" maxlength="255">
                        @error('address')
                        <small class="form-text text-muted">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Telefon</label>
                        <input class="form-control" type="text" name="phone" maxlength="50" value="{{old('phone', @$model->phone)}}" >
                        @error('phone')
                        <small class="form-text text-muted">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" type="email" name="email" maxlength="150" value="{{old('email', @$model->email)}}" >
                        @error('email')
                        <small class="form-text text-muted">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Website</label>
                        <input class="form-control" type="text" name="website" maxlength="255" value="{{old('website', @$model->website)}}" placeholder="https://www.example.com">
                        @error('website')
                        <small class="form-text text-muted">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Facebook</label>
                        <input class="form-control" type="text" name="facebook" maxlength="255" value="{{old('facebook', @$model->facebook)}}" placeholder="https://www.facebook.com/birisi">
                        @error('facebook')
                        <small class="form-text text-muted">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Twitter</label>
                        <input class="form-control" type="text" name="twitter" maxlength="255" value="{{old('twitter', @$model->twitter)}}" placeholder="https://www.twitter.com/birisi">
                        @error('twitter')
                        <small class="form-text text-muted">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>İnstagram</label>
                        <input class="form-control" type="text" name="instagram" maxlength="255" value="{{old('instagram', @$model->instagram)}}" placeholder="https://www.instagram.com/birisi">
                        @error('instagram')
                        <small class="form-text text-muted">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Youtube</label>
                        <input class="form-control" type="text" name="youtube" maxlength="255" value="{{old('youtube', @$model->youtube)}}" placeholder="https://www.youtube.com/birisi">
                        @error('youtube')
                        <small class="form-text text-muted">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Koordinat (Y)</label>
                        <input class="form-control" type="text" name="lat" maxlength="255" value="{{old('lat', @$model->lat)}}" >
                        @error('lat')
                        <small class="form-text text-muted">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Koordinat (X)</label>
                        <input class="form-control" type="text" name="lng" maxlength="255" value="{{old('lng', @$model->lng)}}" >
                        @error('lng')
                        <small class="form-text text-muted">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Logo</label>
                                <div>
                                    <input class="form-control" type="file" name="logo" accept="image/*">
                                    <small class="form-text text-muted">Sadece resim yükleyin. Maks 1 adet.</small>
                                </div>
                                @if(@$model->logoUrl())
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="product-thumbnail">
                                                <img src="{{@$model->logoUrl()}}" class="img-thumbnail img-fluid" alt="">
                                            </div>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Kısa Açıklama</label>
                        <textarea cols="10" rows="3" class="form-control" name="footer_description" maxlength="255">{!! old('footer_description', @$model->footer_description) !!}</textarea>
                    </div>
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary btn-lg" type="submit">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

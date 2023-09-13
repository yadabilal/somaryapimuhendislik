@extends('admin.layouts.app')
@section('content')
    <div class="content container-fluid">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <h4 class="page-title">İçerik</h4>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <form method="post" enctype="multipart/form-data" method="{{route('admin.form.save', ['parentId' => $currentpage->id, 'sectionId' => $sectionId, 'id' => @$model->id])}}">
                    @csrf
                    <div class="form-group">
                        <label>Başlık</label>
                        <input class="form-control" type="text" name="title" value="{{old('title', @$model->title)}}" maxlength="80" required>
                        @error('title')
                        <small class="form-text text-muted">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Alt Başlık</label>
                        <input class="form-control" type="text" name="sub_title" value="{{old('sub_title', @$model->sub_title)}}" maxlength="120">
                        @error('sub_title')
                        <small class="form-text text-muted">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Url</label>
                        <input class="form-control" type="text" name="url" maxlength="255" value="{{old('url', @$model->url)}}" placeholder="Boş bırakılırsa otomatik oluşur.">
                        @error('url')
                        <small class="form-text text-muted">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Ana Görsel</label>
                                <div>
                                    <input class="form-control" type="file" name="main_image" accept="image/*">
                                    <small class="form-text text-muted">Sadece resim yükleyin. Maks 1 adet.</small>
                                </div>
                                @if(@$model->baseImageUrl())
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="product-thumbnail">
                                            <img src="{{@$model->baseImageUrl()}}" class="img-thumbnail img-fluid" alt="">
                                            @if($model->baseImageUrl() != asset('preadmin/img/placeholder.jpg'))
                                            <a href="{{route('admin.form.deleteImage', ['type' => 'main', 'id' => @$model->id])}}"><span class="product-remove" title="Sil"><i class="fa fa-close"></i></span></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Arka Plan Görsel</label>
                                <div>
                                    <input class="form-control" type="file" name="background_image" accept="image/*">
                                    <small class="form-text text-muted">Sadece resim yükleyin. Maks 1 adet.</small>
                                </div>
                                @if(@$model->backgroundImageUrl())
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="product-thumbnail">
                                            <img src="{{@$model->backgroundImageUrl()}}" class="img-thumbnail img-fluid" alt="">

                                            @if($model->backgroundImageUrl() != asset('preadmin/img/placeholder.jpg'))
                                            <a href="{{route('admin.form.deleteImage', ['type' => 'background', 'id' => @$model->id])}}"><span class="product-remove" title="Sil"><i class="fa fa-close"></i></span></a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Sıra</label>
                        <input class="form-control" type="text" name="sequence" value="{{old('sequence', @$model->sequence)}}" placeholder="1" required>
                        @error('sequence')
                        <small class="form-text text-muted">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Kısa Açıklama</label>
                        <input class="form-control" type="text" name="sub_description" value="{{old('sub_description', @$model->sub_description)}}" placeholder="" maxlength="255">
                        @error('sub_description')
                        <small class="form-text text-muted">{{$message}}</small>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Etikeler <small>(İki etiketi virgül ile ayırınız ya da enter'a basınız)</small></label>
                        <input type="text" placeholder="Etiket için entera bas!" data-role="tagsinput" maxlength="255" class="form-control" name="tags" value="{{old('tags', @$model->tags)}}">
                    </div>
                    <div class="form-group">
                        <label class="display-block">Durum</label>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="publish" id="blog_active" value="1" @if(old('publish', @$model->publish) ==1) checked @endif>
                            <label class="form-check-label" for="blog_active">
                                Yayında
                            </label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="publish" id="blog_inactive" value="0" @if(old('publish', @$model->publish) == 0) checked @endif>
                            <label class="form-check-label" for="blog_inactive">
                                Yayından Kaldır
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Detay</label>
                        <textarea cols="30" rows="6" class="form-control summernote" name="description">{!! old('description', @$model->description) !!}</textarea>
                    </div>
                    @if($currentpage->id ==2)
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Slider Görselleri</label>
                                <div>
                                    <input class="form-control" type="file" name="slider_images[]" accept="image/*" multiple>
                                    <small class="form-text text-muted">Sadece resim yükleyin.</small>
                                </div>
                                <?php $sliderImages = $model->sliderImageUrls();?>
                                @if($sliderImages)
                                <div class="row">
                                    @foreach($sliderImages as $index => $sliderImage)
                                    <div class="col-md-6">
                                        <div class="product-thumbnail">
                                            <img src="{{$sliderImage}}" class="img-thumbnail img-fluid" alt="">
                                            
                                
                                            
                                            <a href="{{route('admin.form.deleteImage', ['type' => 'slider', 'id' => @$model->id, 'order' => $index])}}"><span class="product-remove" title="Sil"><i class="fa fa-close"></i></span></a>
                                           
                                            
                                        </div>
                                    </div>
                                     @endforeach
                                </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    @endif
                    <div class="m-t-20 text-center">
                        <button class="btn btn-primary btn-lg" type="submit">Kaydet</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

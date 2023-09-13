@extends('admin.layouts.app')
@section('content')
  <form method="post" action="{{route('admin.dictionary.save')}}">
    @csrf
  <div class="row">
    <div class="col-sm-4 col-4">
      <h4 class="page-title">Sözlük</h4>
    </div>
    <div class="col-sm-8 col-8 text-right m-b-20">
      <button type="submit" class="btn btn-primary pull-right"><i class="fa fa-save"></i> Kaydet</button>
    </div>
  </div>
    @foreach($models as $model)
      <div class="row filter-row">
        <div class="col-sm-3 col-md-3">
          <div class="form-group form-focus">
            <label class="focus-label">{{$model->word}}</label>
            <input type="text" class="form-control floating" value="{{$model->word}}" disabled>
          </div>
        </div>
        <div class="col-sm-9 col-md-9">
          <div class="form-group form-focus">
            <label class="focus-label">Değer</label>
            <input type="text" class="form-control floating" name="{{$model->word}}" value="{{$model->value}}">
          </div>
        </div>
      </div>
      @endforeach
  </form>

@endsection

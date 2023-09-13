@extends('admin.layouts.app')
@section('content')
  <div class="row">
    <div class="col-sm-4 col-4">
      <h4 class="page-title">Kullanıcılar</h4>
    </div>
  </div>

    <form>
      <div class="row filter-row">
        <div class="col-sm-6 col-md-6">
          <div class="form-group form-focus">
            <label class="focus-label">Ad Soyad</label>
            <input type="text" class="form-control floating" name="name" value="{{request('name')}}">
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <div class="form-group form-focus select-focus">
            <label class="focus-label">Durum</label>
            <select class="select floating" name="status">
              <option value="">Tümü</option>
            </select>
          </div>
        </div>
        <div class="col-sm-6 col-md-3">
          <button type="submit" class="btn btn-primary btn-block"> Ara </button>
        </div>
      </div>
    </form>

  <div class="row">
    <div class="col-md-12">
      <div class="table-responsive">
        <table class="table table-border custom-table m-b-0">
          <thead>
          <tr>
            <th>ID</th>
            <th>Görsel</th>
            <th>Ad Soyad</th>
            <th>Kullanıcı Adı</th>
            <th>Telefon Numarası</th>
            <th>Durum</th>
            <th>Tarih</th>
            <th class="text-right">İşlemler</th>
          </tr>
          </thead>
          <tbody>
          @foreach($models as $model)
          <tr>
            <td>#{{$model->id}}</td>
            <td>
              <div class="product-det">
                <img src="{{$model->image()}}" alt="" style="max-height: 100%;">
              </div>
            </td>
            <td>{{$model->full_name()}}</td>
            <td>{{$model->username}}</td>
            <td>{{$model->phone}}</td>
            <td>{{$model->status()}}</td>
            <td>{{$model->created_at()}}</td>
            <td class="text-right">
              <div class="dropdown dropdown-action">
                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <a class="dropdown-item" href="{{url('admin/kullanici-guncelle/'.$model->id)}}"><i class="fa fa-pencil m-r-5"></i> Güncelle</a></li>
                  <a class="dropdown-item" href="{{url('admin/kullanici-sil/'.$model->id)}}"><i class="fa fa-trash-o m-r-5"></i> Sil</a></li>
                </div>
              </div>
            </td>
          </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <div class="row staff-grid-row mt-3">
    <div class="col-sm-12">
      <div class="see-all text-center">
        {{ $models->appends(request()->input())->links() }}
      </div>
    </div>
  </div>
@endsection
@extends('admin.layouts.app')
@section('content')
    <div class="row mt-3">
        <div class="col-sm-8">
            <h4 class="page-title">Aboneler</h4>
        </div>
    </div>
    <div class="row">
        <div class="table-responsive">
            <table class="table table-border custom-table m-b-0">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Email Adresi</th>
                    <th>Tarih</th>
                </tr>
                </thead>
                <tbody>
                @foreach($models as $model)
                    <tr>
                        <td>#{{$model->id}}</td>
                        <td>
                            {{$model->email_address}}
                        </td>
                        <td>{{$model->created_at}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
        <div class="see-all text-center">
            {{ $models->appends(request()->input())->links() }}
        </div>
    </div>
@endsection

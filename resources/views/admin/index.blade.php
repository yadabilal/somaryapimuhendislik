@extends('admin.layouts.app')
@section('content')
    <div class="row mt-3">
        <div class="col-sm-8">
            <h4 class="page-title"><a title="Menüyü Düzenle" href="{{route('admin.form', ['parentId' => $currentpage->id, 'sectionId' => $sectionId, 'id' => $currentpage->id])}}"><i class="fa fa-edit"></i></a> {{$currentpage->title}} </h4>
        </div>
    </div>
    <div class="row">
        <div class="col-sm-4 col-md-4 col-lg-4 col-xl-3 roles_class">
            @if($sectionId)
            <a href="{{route('admin.form', ['parentId' => $currentpage->id, 'sectionId' => $sectionId])}}" class="btn btn-primary btn-block"><i class="fa fa-plus"></i> İçerik Ekle</a>
            @endif
            <div class="roles-menu">
                <ul class="roles-menu-ul">
                    @foreach($sections as $section)
                    <li class="{{$sectionId == $section->id ? 'active': ''}}">
                        <a href="{{route('admin.user.proccess', ['parentId' => $currentpage->id, 'sectionId' => $section->id])}}">
                            <i class="status {{$section->publish ? 'online' : 'offline'}}"></i> {{$section->section_name}}
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="col-sm-8 col-md-8 col-lg-8 col-xl-9 roles_class">
            <h6 class="card-title m-b-20">
                <a title="Alanı Düzenle" href="{{route('admin.form', ['parentId' => $currentpage->id, 'sectionId' => $sectionId, 'id' => $sectionId])}}"><i class="fa fa-edit"></i></a>
                {{$currentsection->section_name}} İçerikleri
            </h6>
            <div class="table-responsive">
                <table class="table table-border custom-table m-b-0">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Başlık</th>
                        <th>Sıra</th>
                        <th>Durum</th>
                        <th>Tarih</th>
                        <th class="text-right">İşlemler</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($contents as $content)
                        <tr>
                            <td>#{{$content->id}}</td>
                            <td>
                                {{$content->title}}
                                @if($content->sub_title)
                                <br>
                                ({{$content->sub_title}})
                                @endif
                            </td>
                            <td>
                                {{$content->sequence}}
                            </td>
                            <td>{!! $content->status() !!}</td>
                            <td>{{$content->getDateTime()}}</td>
                            <td class="text-right">
                                <div class="dropdown dropdown-action">
                                    <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="{{route('admin.form', ['parentId' => $currentpage->id, 'sectionId' => $sectionId, 'id' => $content->id])}}"><i class="fa fa-pencil m-r-5"></i> Güncelle</a>

                                        @if($content->publish)
                                        <a class="dropdown-item" href="{{route('admin.publishOrNotPublish', ['id' => $content->id])}}"><i class="fa fa-trash-o m-r-5"></i> Yayından Kaldır</a>
                                        @else
                                        <a class="dropdown-item" href="{{route('admin.publishOrNotPublish', ['id' => $content->id])}}"><i class="fa fa-check-circle-o m-r-5"></i> Yayınla</a>
                                        @endif
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="see-all text-center">
                {{ $contents->appends(request()->input())->links() }}
            </div>
        </div>
    </div>
@endsection

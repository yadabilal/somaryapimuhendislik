<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Model\Website\Content;
use App\Model\Website\Setting;


class SettingController extends Controller
{
    public $view = 'admin.setting';
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index() {
        $parentId = request()->get('parentId') ?: 0;
        $sectionId = request()->get('sectionId') ?: 0;
        $datas = Content::allContents($parentId, $sectionId);
        $model = Setting::orderBy('id', 'desc')->first();
        $datas['model'] = $model;

        return view($this->view.'.index', $datas);
    }

    public function save() {
        $model = Setting::orderBy('id', 'desc')->first();
        if(request()->isMethod('post') && $model) {
            $all = request()->all();
            $id = @$all['id'] ?: 0;

            $keys = ['title', 'address', 'phone', 'email', 'website', 'facebook', 'twitter', 'instagram', 'youtube', 'footer_description', 'lat', 'lng'];
            foreach ($keys as $key) {
                $model->{$key} = request()->get($key);
            }

            if($model->save()) {
                if(request()->file('logo')) {
                    $file = request()->file('logo');
                    $model->logo = $file->store('logos',['disk' => 'public']);
                }
                $model->save();
            }
        }

        return redirect()->back();
    }

}

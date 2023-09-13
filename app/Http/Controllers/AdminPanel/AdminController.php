<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Model\Website\Content;
use App\User;

class AdminController extends Controller
{
    public $view = 'admin';

    public function __construct() {
      $this->middleware('auth');
    }

    public function proccess() {
        $parentId = request()->get('parentId') ?: 0;
        $sectionId = request()->get('sectionId') ?: 0;
        $datas = Content::allContents($parentId, $sectionId);

        return view($this->view.'.index', $datas);
    }

    public function index()
    {
      return view($this->view.'.password');
    }
    public function save()
      {
        if(request()->post('password')) {
          $password = request()->post('password');
          $this->user->update(['password' => User::hash_pasword($password)]);
        }
        return redirect()->back();
      }

    public function form() {
        $parentId = request()->get('parentId') ?: 0;
        $sectionId = request()->get('sectionId') ?: 0;
        $id = request()->get('id') ?: 0;
        $model = new Content();

        if($id) {
            $model = Content::where('id' , $id)->first();
        }

        $datas = Content::allContents($parentId, $sectionId);
        $datas['model'] = $model;

        if($id && (!$model->parent_id || $model->id == $sectionId)) {
            return view($this->view.'.form_menu', $datas);
        }

        return view($this->view.'.form', $datas);
    }

    public function formSave() {
        $parentId = request()->get('parentId') ?: 0;
        $sectionId = request()->get('sectionId') ?: 0;

        if(request()->isMethod('post')) {
            $all = request()->all();
            $id = @$all['id'] ?: 0;
            $model = new Content();
            if($id) {
                $model = Content::where('id' , $id)->first();
            }else {
                $model->parent_id = $sectionId;
            }

            $keys = ['title', 'sub_title', 'url', 'section_name', 'sub_description', 'description', 'publish', 'sequence', 'tags'];
            foreach ($keys as $key) {
                $model->{$key} = request()->get($key);
            }

            if($model->save()) {

                if(request()->file('main_image')) {
                    $file = request()->file('main_image');
                    $model->main_image = $file->store('contents',['disk' => 'public']);
                }

                if(request()->file('background_image')) {
                    $file = request()->file('background_image');
                    $model->background_image = $file->store('contents',['disk' => 'public']);
                }
                
                if(request()->file('slider_images')) {
                    $files = request()->file('slider_images');
                
                    $datas = [];
                    foreach($files as $file) {
                        $datas[] = $file->store('contents',['disk' => 'public']);
                    }
                    $model->slider_images = json_encode($datas);
                }

                $model->save();
                return redirect(route('admin.user.proccess', ['parentId' => $parentId, 'sectionId' => $sectionId]));
            }

        }
        return redirect()->back();
    }

    public function deleteImage() {
        $id = request()->get('id') ?: 0;
        $type = request()->get('type') ?: '';

        if($id && $type) {
            $model = Content::where('id' , $id)->first();
            if($model) {
                if($type == 'main') {
                    $model->main_image = null;
                }

                if($type == 'background') {
                    $model->background_image = null;
                }
                
                 if($type == 'slider') {
                     $order = request()->get('order') ?: 0;
                     $datas = json_decode($model->slider_images, true);
                
                     unset($datas[$order]);
                    $model->slider_images = json_encode($datas);
                }

                $model->save();
            }
        }
        return redirect()->back();
    }

    public function publishOrNotPublish() {
        $id = request()->get('id') ?: 0;

        if($id) {
            $model = Content::where('id' , $id)->first();
            if($model) {
                $model->publish = !$model->publish;
                $model->save();
            }
        }
        return redirect()->back();
    }
}

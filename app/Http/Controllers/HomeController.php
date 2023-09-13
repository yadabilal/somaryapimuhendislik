<?php

namespace App\Http\Controllers;

use App\Model\Website\Content;
use App\Model\Website\Message;
use App\Model\Website\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class HomeController extends Controller
{

    public function index($url = '')
    {
        $datas = Content::menus($url);
        $menus = $datas['menus'];
        $currentpage = $datas['currentpage'];
        $homepage = $datas['homepage'];
        $setting = $this->setting;
        $dictionary = $this->dictionary;
        $childs = $currentpage->activeChilds;

       return view('site.'.$currentpage->type, compact('homepage','setting', 'menus', 'dictionary', 'currentpage', 'childs'));
    }

    public function detail($url, $contentUrl)
    {
        $model = Content::where('url', $contentUrl)->where('publish', 1)->first();

        if(!$model) {
            return ;
        }
        $datas = Content::menus($url);
        $currentpage = $datas['currentpage'];
        $datas['setting'] = $this->setting;
        $datas['dictionary'] = $this->dictionary;
        $datas['childs'] = $currentpage->activeChilds;
        $datas['model'] = $model;

        return view('site.'.$currentpage->type.'_detail', $datas);
    }


    public function contact(Request $request) {
        $data['status'] = 'error';
        $data['message'] = 'Lütfen tüm alanları doğru bir şekilde giriniz!';

      if($request->isMethod('post')) {
          $all = $request->except('_token');
          $validator = Validator::make($request->all(), [
              'full_name' => 'required|max:150',
              'email' => 'required|email|max:150',
              'phone' => 'required|max:15',
              'message' => 'required|max:255',
          ]);

          if(!$validator->fails()) {
              $data['status'] = 'success';
              $data['message'] = 'İşleminiz başarılı bir şekilde gerçekleşti!';

              $model = new Message();
              foreach ($all as $key => $value) {
                  $model->{$key} = $value;
              }
              $model->save();
          }
      }

      return response()->json($data);
    }

    public function subscribe(Request $request) {
        $data['status'] = 'error';
        $data['message'] = 'Lütfen tüm alanları doğru bir şekilde giriniz!';

        if($request->isMethod('post')) {
            $all = $request->except('_token');
            $validator = Validator::make($request->all(), [
                'email' => 'required|email|max:150',
            ]);

            if(!$validator->fails()) {
                $data['status'] = 'success';
                $data['message'] = 'İşleminiz başarılı bir şekilde gerçekleşti!';

                $model = new Subscription();
                $model->email_address = $request->get('email');
                $model->save();
            }
        }

        return response()->json($data);
    }

}

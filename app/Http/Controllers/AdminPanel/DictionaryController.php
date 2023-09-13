<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Model\Website\Content;
use App\Model\Website\Dictionary;
use App\Model\Website\Setting;


class DictionaryController extends Controller
{
    public $view = 'admin.dictionary';
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index() {
        $parentId = request()->get('parentId') ?: 0;
        $sectionId = request()->get('sectionId') ?: 0;
        $datas = Content::allContents($parentId, $sectionId);
        $models = Dictionary::get();
        $datas['models'] = $models;

        return view($this->view.'.index', $datas);
    }

    public function save() {
        if(request()->post()) {
            $all = request()->except('_token');
            foreach ($all  as $key => $value) {
                $item = Dictionary::where('word', $key)->first();

                if($item) {
                    $item->value = $value;
                    $item->save();
                }
            }
        }

        return redirect()->back();
    }

}

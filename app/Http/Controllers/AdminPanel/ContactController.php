<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\Model\Website\Content;
use App\Model\Website\Dictionary;
use App\Model\Website\Message;
use App\Model\Website\Setting;
use App\Model\Website\Subscription;


class ContactController extends Controller
{
    public $view = 'admin.contact';
    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index() {
        $parentId = request()->get('parentId') ?: 0;
        $sectionId = request()->get('sectionId') ?: 0;
        $datas = Content::allContents($parentId, $sectionId);
        $models = Message::orderBy('id', 'desc')->paginate(10);
        $datas['models'] = $models;

        return view($this->view.'.index', $datas);
    }

    public function subscription() {
        $parentId = request()->get('parentId') ?: 0;
        $sectionId = request()->get('sectionId') ?: 0;
        $datas = Content::allContents($parentId, $sectionId);
        $models = Subscription::orderBy('id', 'desc')->paginate(10);
        $datas['models'] = $models;

        return view($this->view.'.subscription', $datas);
    }

}

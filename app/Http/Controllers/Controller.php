<?php

namespace App\Http\Controllers;

use App\Model\Website\Dictionary;
use App\Model\Website\Setting;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public $user;
    public $setting;
    public $dictionary;
    public $keywords = ['İkinci el kitap', 'ücretsiz kitap', 'askıda kitap', 'kitap bağışı'];
    public function callAction($method, $parameters)
    {
      $this->setting = Setting::first();
      $this->dictionary = new Dictionary();

      return parent::callAction($method, $parameters);
    }
}

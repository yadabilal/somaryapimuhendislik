<?php

namespace App\Http\Controllers\AdminPanel;

use App\Http\Controllers\Controller;
use App\User;

class UserController extends Controller
{
    public $view = 'admin.user';
    public function __construct()
    {
      $this->middleware('auth');
    }
    public function index()
    {
      $models = User::where('type', '!=',User::TYPE_ADMIN)
        ->orderBy('id', 'desc')->paginate(User::LIST_ADMIN);
      return view($this->view.'.index', compact('models'));
    }
    
}

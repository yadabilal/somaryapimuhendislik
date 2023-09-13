<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\Book;

class SitemapController extends Controller
{
  public function index()
  {

    return response()->view('site.sitemap.index', [
    ])->header('Content-Type', 'text/xml');
  }
  public function statics()
  {
        return response()->view('site.sitemap.statics', [

        ])->header('Content-Type', 'text/xml');
  }
  public function books()
  {
      $books = Book::with('user', 'user.city', 'user.town')->get();
        return response()->view('site.sitemap.books', [
          'books' => $books
        ])->header('Content-Type', 'text/xml');
  }
}

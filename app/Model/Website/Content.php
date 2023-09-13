<?php

namespace App\Model\Website;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    const TYPE_HOME = 'home';
    const TYPE_ABOUT = 'about';
    const TYPE_SERVICE = 'service';
    const TYPE_BLOG = 'blog';
    const TYPE_CONTACT = 'contact';
    const TYPE_PROJECT = 'project';

    const TYPE_SECTION_ONE = 'section_one';
    const TYPE_SECTION_TWO = 'section_two';
    const TYPE_SECTION_THREE = 'section_three';
    const TYPE_SECTION_FOUR = 'section_four';
    const TYPE_SECTION_FIVE = 'section_five';
    const TYPE_SECTION_SIX = 'section_six';
    const TYPE_SECTION_SEVEN = 'section_seven';
    const TYPE_SECTION_EIGHT = 'section_eight';
    const TYPE_SECTION_NINE = 'section_nine';
    const TYPE_SECTION_TEN = 'section_ten';
    const TYPE_SECTION_ELEVEN = 'section_eleven';

  public function activeChilds() {
    return $this->hasMany(self::class, 'parent_id')
        ->where('publish', 1)
        ->orderBy('sequence' , 'asc');
  }

    public function allChilds() {
        return $this->hasMany(self::class, 'parent_id')
            ->orderBy('sequence' , 'asc');
    }

  public function getUrl($menu = null) {
      if(filter_var($this->url, FILTER_VALIDATE_URL) || !$this->parent_id) {
          return $this->url;
      }

      return $menu ? $menu->url.'/'.$this->url : $this->url;
  }

  public function getDate() {
      return Carbon::parse($this->created_at)->format('d/m/Y');
  }

    public function getDateTime() {
        return Carbon::parse($this->created_at)->format('d/m/Y H:i');
    }
    public function status() {
        if($this->publish) {
            return '<a class="btn btn-sm bg-success mr-2">Yayında</a>';
        }

        return '<a class="btn btn-sm bg-warning mr-2">Yayında Değil</a>';
    }

    public function baseImageUrl() {
      return $this->main_image ? url('uploads/'.$this->main_image) : asset('preadmin/img/placeholder.jpg');
    }

    public function backgroundImageUrl() {
        return $this->background_image ? url('uploads/'.$this->background_image) : asset('preadmin/img/placeholder.jpg');
    }


    protected static function boot()
    {
        parent::boot();

        self::saving(function($model){
            $url = $model->url ?:self::slugify($model->title);
            if ($model->url && filter_var($model->url, FILTER_VALIDATE_URL)) {
                $url = $model->url;
            }

            $content = self::where('url', $url);

            if($model->id) {
                $content = $content->where('id', '!=', $model->id);
            }
            $content =  $content->exists();
            $url = $content ? $url.'-'.time() : $url;
            $model->url = $url;
        });

    }

    public static function slugify($text, string $divider = '-')
    {
        $text = preg_replace('~[^\pL\d]+~u', $divider, $text);
        $text = iconv('utf-8', 'us-ascii//TRANSLIT', $text);
        $text = preg_replace('~[^-\w]+~', '', $text);
        $text = trim($text, $divider);
        $text = preg_replace('~-+~', $divider, $text);
        $text = strtolower($text);

        if (empty($text)) {
            return 'n-a';
        }

        return $text;
    }

  public static function menus ($url = '') {
      $type = self::TYPE_HOME;
      $currentpage = null;
      $homepage = null;
      $contents = self::whereNull('parent_id')
          ->where('publish', 1)
          ->with('activeChilds')
          ->with( ['activeChilds.activeChilds' => function($q){
              if(@request()->get('search')) {
                  $q->where('title', 'like', '%' . request()->get('search') . '%');
              }
          }])
          ->orderBy('sequence' , 'asc')
          ->get();
      $menus = [];

      foreach ($contents as $content) {

          if($url && $content->url == $url) {
              $type = $content->type;
          }

          if($content->type == $type) {
              $currentpage = $content;
          }
          if($content->type == self::TYPE_HOME) {
              $homepage = $content;
          }
          $menus[$content->id] = $content;
      }

      $datas ['currentpage'] = $currentpage;
      $datas ['homepage'] = $homepage;
      $datas ['menus'] = $menus;

      return $datas;
  }

  public static function allContents ($parentId = 0, $sectionId = 0) {
        $contents = self::whereNull('parent_id')
            ->with('allChilds')
            ->orderBy('sequence' , 'asc')
            ->get();
        $datas = [];

        foreach ($contents as $content) {
            $parentId  = $parentId ?: $content->id;

            if($content->id == $parentId) {
                $sectionId = $sectionId ?: $content->allChilds[0]->id;
                $sectionContents = self::where('parent_id', $sectionId)
                    ->orderBy('sequence' , 'asc')
                    ->paginate(10);
                $datas ['currentpage'] = $content;
                $datas ['contents']  = $sectionContents;
                $datas ['sections']  = $content->allChilds;
            }

            $datas ['menus'][$content->id] = $content;
        }

      $datas ['currentsection'] = self::where('id', $sectionId)->first();
      $datas['sectionId'] = $sectionId;
      $datas['parentId'] = $parentId;
        return $datas;
    }

    public static function lastContent($parentId, $limit = 7) {
        return self::where('parent_id', $parentId)
            ->orderBy('id' , 'desc')
            ->limit($limit)
            ->get();
    }
    
    
        public function sliderImageUrls() {
             $datas = [];
             
             $sliderImages = @json_decode($this->slider_images, true) ? : [];

             foreach($sliderImages as $index => $sliderImage) {
                 $datas[$index] = url('uploads/'.$sliderImage);
             }
             
        return  $datas;
    }
}

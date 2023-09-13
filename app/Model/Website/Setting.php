<?php

namespace App\Model\Website;


use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
  protected $table = 'settings';

  public $timestamps = false;

    public function logoUrl() {
        return $this->logo ? url('uploads/'.$this->logo) : '';
    }


    public function instagram() {
        $posts = $this->last_post ? json_decode($this->last_posts, true) : [];
        return $posts;
    }
    
    public function getPhoneWhatsapp() {
        $phone = str_replace(' ', '', $this->phone);
         $phone = str_replace('+90', '90', $phone);
         return $phone;
    }
}

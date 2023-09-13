<?php

namespace App\Model\Website;


use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
  protected $table = 'dictionaries';
  public $timestamps = false;
  public $list;

  public function __construct(array $attributes = []) {
      parent::__construct($attributes);
  }

  public function getValue($key) {
      if(!$this->list) {
          $lists = self::get();

          foreach ($lists as $list) {
              $this->list[$list->word] = $list->value;
          }
      }
      return @$this->list[$key] ?: '';
  }
}

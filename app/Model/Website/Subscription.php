<?php

namespace App\Model\Website;


use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Subscription extends Model
{
  protected $table = 'subscriptions';

  public $timestamps = false;

    protected static function boot()
    {
        parent::boot();
        static::saving(function($model) {
            $model->created_at = Carbon::now();
        });
    }

}

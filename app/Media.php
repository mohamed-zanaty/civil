<?php

namespace App;
use Illuminate\Database\Eloquent\Builder;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
  protected static function boot(){
    parent::boot();
    static::addGlobalScope('id', function(Builder $b){
      $b->orderby('id', 'desc');
    });
  }
}

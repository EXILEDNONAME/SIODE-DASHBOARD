<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Menu extends Model {

  use LogsActivity;

  protected $table = 'menu_items';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function parent()
  {
    return $this->belongsTo('App\Menu', 'parent');
  }

  public function children()
  {
    return $this->hasMany('App\Menu', 'parent');
  }

}

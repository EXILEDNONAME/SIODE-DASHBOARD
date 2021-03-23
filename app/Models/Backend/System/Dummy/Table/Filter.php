<?php

namespace App\Models\Backend\System\Dummy\Table;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Filter extends Model {

  use LogsActivity;

  protected $table = 'dummy_table_filters';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}

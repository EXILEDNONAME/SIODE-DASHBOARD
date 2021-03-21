<?php

namespace App\Models\Backend\System\Dummy;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class TableRelation extends Model {

  use LogsActivity;

  protected $table = 'dummy_table_relations';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}

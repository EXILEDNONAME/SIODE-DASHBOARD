<?php

namespace App\Models\Backend\System\Dummy;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Models\Backend\System\Dummy\TableGeneral;

class TableRelation extends Model {

  use LogsActivity;

  protected $table = 'dummy_table_relations';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function dummy_table_generals(){
    return $this->belongsTo(TableGeneral::class, 'id_general');
  }

}

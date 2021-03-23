<?php

namespace App\Models\Backend\System\Dummy\Table;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Models\Backend\System\Dummy\SingleRelation;

class MultiRelation extends Model {

  use LogsActivity;

  protected $table = 'dummy_table_multi_relations';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function dummy_table_generals(){
    return $this->belongsTo(SingleRelation::class, 'id_single_relation');
  }

}

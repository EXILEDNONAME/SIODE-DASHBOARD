<?php

namespace App\Models\Backend\Main\Jasamarga;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Maintenance extends Model {

  use LogsActivity;

  protected $table = 'jasamarga_maintenances';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}

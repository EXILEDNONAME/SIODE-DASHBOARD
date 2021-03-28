<?php

namespace App\Models\Backend\Main\Vms;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Directory extends Model {

  use LogsActivity;

  protected $table = 'vms_directories';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

}

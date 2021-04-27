<?php

namespace App\Models\Backend\Main\Sesko;

use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use App\Models\Backend\Main\Sesko\Location;
use App\Models\Backend\Main\Sesko\Packet;

class User extends Model {

  use LogsActivity;

  protected $table = 'sesko_users';
  protected $primaryKey = 'id';
  protected $guarded = ['id'];

  protected static $logAttributes = ['*'];

  public function sesko_locations(){
    return $this->belongsTo(Location::class, 'id_location');
  }

  public function sesko_packets(){
    return $this->belongsTo(Packet::class, 'id_packet');
  }

}

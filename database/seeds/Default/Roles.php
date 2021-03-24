<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Role;

class Roles extends Seeder
{

  public function run()
  {
    $data = [
      [
        'id_access'         => '1',
        'name'              => 'Administrator',
        'created_at'        => Carbon::now(),
      ],
      [
        'id_access'         => '2',
        'name'              => 'User',
        'created_at'        => Carbon::now(),
      ],
    ];

    Role::insert($data);
  }
}

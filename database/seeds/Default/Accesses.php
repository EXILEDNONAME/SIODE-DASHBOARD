<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Access;

class Accesses extends Seeder {
  public function run() {
    $data = [
      [
        'name'              => 'Administrator',
        'created_at'        => Carbon::now(),
      ],
    ];

    Access::insert($data);
  }
}

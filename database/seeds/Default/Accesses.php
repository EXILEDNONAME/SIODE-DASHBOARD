<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon as Carbon;
use App\Access;

class Accesses extends Seeder {
  public function run() {
    $data = [
      [
        'subject'           => '[ "messages", "file-manager", "dummies", "generator", "managements" ]',
        'created_at'        => Carbon::now(),
      ],
      [
        'subject'           => '[ "messages" ]',
        'created_at'        => Carbon::now(),
      ],
    ];

    Access::insert($data);
  }
}

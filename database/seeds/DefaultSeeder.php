<?php

use Illuminate\Database\Seeder;

class DefaultSeeder extends Seeder {
  public function run() {
    $this->call(Accesses::class);
    $this->call(Roles::class);
    $this->call(Users::class);
    $this->call(Menus::class);
  }
}

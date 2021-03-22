<?php

use Carbon\Carbon as Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Menu;

class Menus extends Seeder
{

  public function run()
  {
    $data = [
      [
        'name'              => 'Menu Sidebar',
        'created_at'        => Carbon::now(),
      ],
      [
        'name'              => 'Menu Header',
        'created_at'        => Carbon::now(),
      ],
    ];

    Menu::insert($data);
  }
}

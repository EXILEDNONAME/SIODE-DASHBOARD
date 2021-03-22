<?php

use App\Models\Backend\System\Dummy\TableGeneral;

function dummy_generals() {
  $items = TableGeneral::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

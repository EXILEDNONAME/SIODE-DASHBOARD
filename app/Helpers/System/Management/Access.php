<?php

use App\Access;

function Accesses() {
  $items = Access::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

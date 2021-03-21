<?php

use App\Access;

function Access() {
  $items = Access::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

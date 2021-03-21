<?php

use App\Role;

function Roles() {
  $items = Role::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

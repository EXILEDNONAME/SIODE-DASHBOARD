<?php

use App\Models\Backend\Main\Vms\Area;
use App\Models\Backend\Main\Vms\Type;

function vms_areas() {
  $items = Area::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function vms_types() {
  $items = Type::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function filter_vms_areas() {
  $items = Area::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

function filter_vms_types() {
  $items = Type::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

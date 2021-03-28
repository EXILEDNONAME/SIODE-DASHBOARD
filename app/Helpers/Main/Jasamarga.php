<?php

use App\Models\Backend\Main\Jasamarga\Device;
use App\Models\Backend\Main\Jasamarga\Location;
use App\Models\Backend\Main\Jasamarga\User;

function jasamarga_devices() {
  $items = Device::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function jasamarga_locations() {
  $items = Location::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function jasamarga_users() {
  $items = User::orderBy('name','asc')->where('active', 1)->pluck('name', 'id')->toArray();
  return $items;
}

function filter_jasamarga_devices() {
  $items = Device::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

function filter_jasamarga_locations() {
  $items = Location::orderBy('name','asc')->pluck('name', 'name')->toArray();
  return $items;
}

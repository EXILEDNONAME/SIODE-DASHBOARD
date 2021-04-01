@extends('layouts.pages.index')
@push('title', 'VMS Directories')

@push('content-head')
<th> Area </th>
<th> Type </th>
<th> Name </th>
<th> IP Address </th>
<th> MAC Address </th>
<th width="1"> Port </th>
@endpush

@push('content-body')
{ data: 'vms_areas' },
{ data: 'vms_types' },
{ data: 'name' },
{ data: 'ip_address' },
{ data: 'mac_address' },
{ data: 'port' },
@endpush

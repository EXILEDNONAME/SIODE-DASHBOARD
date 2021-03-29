@extends('layouts.pages.index')
@push('title', 'Jasamarga Officials')

@push('content-head')
<th> Name </th>
<th> IP Address </th>
<th> MAC Address </th>
<th> Port </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'name' },
{ data: 'ip_address' },
{ data: 'mac_address' },
{ data: 'port' },
{ data: 'description' },
@endpush

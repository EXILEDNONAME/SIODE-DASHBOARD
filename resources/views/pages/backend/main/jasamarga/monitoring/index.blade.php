@extends('layouts.custom.monitoring')
@push('title', 'Jasamarga Monitorings')

@push('content-head')
<th width="1"> Status </th>
<th> Name </th>
<th> IP Address </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'status_device' },
{ data: 'name' },
{ data: 'ip_address' },
{ data: 'description' },
@endpush

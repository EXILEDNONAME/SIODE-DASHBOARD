@extends('layouts.pages.index', ['status' => 'true'])
@push('title', 'Jasamarga Maintenances')

@push('content-head')
<th> Date Start </th>
<th> Date End </th>
<th> Name </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'date_start' },
{ data: 'date_end' },
{ data: 'name' },
{ data: 'description' },
@endpush

@extends('layouts.pages.index')
@push('title', 'Jasamarga Maintenances')

@push('content-head')
<th> Name </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'name' },
{ data: 'description' },
@endpush

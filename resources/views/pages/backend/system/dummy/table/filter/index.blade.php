@extends('layouts.pages.index', ['status' => 'true'])
@push('title', 'Table Filters')

@push('content-head')
<th> Name </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'name' },
{ data: 'description' },
@endpush

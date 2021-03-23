@extends('layouts.pages.index', ['status' => 'true'])
@push('title', 'Table Single Relations')

@push('content-head')
<th> Relation </th>
<th> Name </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'dummy_table_generals.name' },
{ data: 'name' },
{ data: 'description' },
@endpush

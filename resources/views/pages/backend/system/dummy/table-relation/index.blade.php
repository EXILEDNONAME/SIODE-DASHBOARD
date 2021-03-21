@extends('layouts.pages.index', ['status' => 'true'])
@push('title', 'Dummy Table Relations')

@push('content-head')
<th> Name </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'name' },
{ data: 'description' },
@endpush
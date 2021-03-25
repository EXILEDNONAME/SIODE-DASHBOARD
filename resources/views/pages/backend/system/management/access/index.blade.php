@extends('layouts.pages.index')
@push('title', 'Management Accesses')

@push('content-head')
<th> Subject </th>
<th> Description </th>
@endpush

@push('content-body')
{ data: 'subject' },
{ data: 'description' },
@endpush

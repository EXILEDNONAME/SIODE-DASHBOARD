@extends('layouts.pages.create')
@push('title', 'JMTM Maintenances')

@push('content-body')
<form method="POST" action="{{ URL::current() }}/../" accept-charset="UTF-8" class="form-horizontal" enctype="multipart/form-data">
  {{ csrf_field() }}

  <input class="form-control" name="created_by" type="hidden" value="{{ Auth::User()->id }}">
  @include($path . '.form', ['status' => 'true', 'formMode' => 'create'])
</form>
@endpush

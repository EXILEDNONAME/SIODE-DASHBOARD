@extends('layouts.pages.index', ['status' => 'true'])
@push('title', 'Vms Maintenances')

@push('content-head')
<th width="1"> Area </th>
<th width="1"> Type </th>
<th width="1" class="text-nowrap"> Start </th>
<th width="1" class="text-nowrap"> Selesai </th>
<th width="1" class="text-nowrap"> Selsih Waktu </th>
<th> VMS </th>
<th> Permasalahan </th>
<th> Tindakan </th>
<th> Keterangan </th>
@endpush

@push('content-body')
{ data: 'vms_areas'},
{ data: 'vms_types'},
{ data: 'date_start'},
{ data: 'date_end' },
{ data: 'time_difference' },
{ data: 'vms_directories' },
{ data: 'name' },
{ data: 'troubleshoot' },
{ data: 'description' },
@endpush


@push('filter-header')
<div class="col-md-2 my-2 my-md-0">
  <div class="d-flex align-items-center">
    {!! Form::select(NULL, filter_vms_areas(), NULL, ['data-column' => 2, 'placeholder' => '- Filter Area -', 'class' => 'form-control filter-area']) !!}
  </div>
</div>
<div class="col-md-2 my-2 my-md-0">
  <div class="d-flex align-items-center">
    {!! Form::select(NULL, filter_vms_types(), NULL, ['data-column' => 2, 'placeholder' => '- Filter Type -', 'class' => 'form-control filter-type']) !!}
  </div>
</div>
@endpush

@push('filter-function')
d.filter_area = $('#filter_area').val();
d.filter_type = $('#filter_type').val();
@endpush

@push('filter-data')
$('.filter-area').change(function () {
  table.column(3)
  .search( $(this).val() )
  .draw();
});
$('.filter-type').change(function () {
  table.column(4)
  .search( $(this).val() )
  .draw();
});
@endpush

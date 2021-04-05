@extends('layouts.default')
@push('title', 'Dashboard')

@push('css')
<link href="/assets/backend/plugins/custom/datatables/datatables.bundle.css?v=7.0.5" rel="stylesheet" type="text/css" />
@endpush

@push('content')
@if ($message = Session::get('success'))
<div id="toast-container-effect" class="toast-bottom-right">
  <div class="toast toast-success" aria-live="polite">
    <div class="toast-message">{{ $message }}</div>
  </div>
</div>
@endif

@if ($message = Session::get('error'))
<div id="toast-container-effect" class="toast-bottom-right">
  <div class="toast toast-error" aria-live="polite">
    <div class="toast-message">{{ $message }}</div>
  </div>
</div>
@endif

@if (Accesses('Full-Administrator'))
@include('pages.backend.dashboard.access.full-administrator')
@endif
@endpush


@push('js')
<script src="/assets/backend/js/pages/features/miscellaneous/bootstrap-notify.js?v=7.0.5"></script>
<script src="/assets/backend/js/pages/features/miscellaneous/toastr.js?v=7.0.5"></script>
<script src="/assets/backend/plugins/custom/datatables/datatables.bundle.js?v=7.0.5"></script>
<script src="/assets/backend/js/pages/crud/forms/widgets/bootstrap-datepicker.js?v=7.0.5"></script>
<script src="/assets/backend/js/pages/crud/datatables/search-options/advanced-search.js?v=7.0.5"></script>
@endpush

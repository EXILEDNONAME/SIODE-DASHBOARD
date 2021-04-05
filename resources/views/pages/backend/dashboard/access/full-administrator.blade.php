<div class="row">
  <div class="col-md-3">
    <div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
      <div class="alert-icon">
        <span class="svg-icon svg-icon-success">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <rect x="0" y="0" width="24" height="24"></rect>
              <circle fill="#000000" cx="9" cy="15" r="6"></circle>
              <path d="M8.8012943,7.00241953 C9.83837775,5.20768121 11.7781543,4 14,4 C17.3137085,4 20,6.6862915 20,10 C20,12.2218457 18.7923188,14.1616223 16.9975805,15.1987057 C16.9991904,15.1326658 17,15.0664274 17,15 C17,10.581722 13.418278,7 9,7 C8.93357256,7 8.86733422,7.00080962 8.8012943,7.00241953 Z" fill="#000000" opacity="0.3"></path>
            </g>
          </svg>
        </span>
      </div>
      <div class="alert-text">
        Hi <b>{{ Auth::User()->name }}</b>, <br>
        <span class="text-muted"> App Version 1.0.0 </span>
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
      <div class="alert-icon">
        <span class="svg-icon svg-icon-info">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <polygon points="0 0 24 0 24 24 0 24"/>
              <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
              <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
            </g>
          </svg>
        </span>
      </div>
      <div class="alert-text">
        <span class="font-weight-bold"> Total Users </span><br>
        <a href="/dashboard/management/users" class="text-danger"> {{ DB::table('users')->get()->count() }} </a> Users
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
      <div class="alert-icon">
        <span class="svg-icon svg-icon-info">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <polygon points="0 0 24 0 24 24 0 24"/>
              <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
              <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
            </g>
          </svg>
        </span>
      </div>
      <div class="alert-text">
        <span class="font-weight-bold"> Total Accesses </span><br>
        <a href="/dashboard/management/users" class="text-danger"> {{ DB::table('accesses')->get()->count() }} </a> Accesses
      </div>
    </div>
  </div>
  <div class="col-md-3">
    <div class="alert alert-custom alert-white alert-shadow fade show gutter-b" role="alert">
      <div class="alert-icon">
        <span class="svg-icon svg-icon-info">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <polygon points="0 0 24 0 24 24 0 24"/>
              <path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"/>
              <path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"/>
            </g>
          </svg>
        </span>
      </div>
      <div class="alert-text">
        <span class="font-weight-bold"> Total Users </span><br> 5 Users
      </div>
    </div>
  </div>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="card card-custom gutter-b" data-card="true" id="kt_card_3">

      <div class="card-header">
        <div class="card-title">
          <h3 class="card-label">  {{ trans('default.title.page-index') }} </h3>
        </div>

        <div class="card-toolbar">
          <a href="{{ URL::current() }}/create" class="btn btn-sm btn-icon btn-clean btn-icon-md"  data-toggle="tooltip" title="{{ trans('default.label.create') }}"><i class="fas fa-plus"></i></a>
          <a id="file-refresh" class="btn btn-sm btn-icon btn-clean btn-icon-md"  data-toggle="tooltip" title="{{ trans('default.label.refresh') }}"><i class="la la-refresh"></i></a>
          <div class="dropdown dropdown-inline">
            <button type="button" class="btn btn-clean btn-sm btn-icon btn-icon-md" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-download"  data-toggle="tooltip" title="{{ trans('default.label.export') }}"></i>
            </button>
            <div class="dropdown-menu dropdown-menu-right">
              <ul class="navi navi-hover py-5">
                <li class="navi-item" data-toggle="tooltip" title="{{ trans('default.button.export.copy-description') }}">
                  <a href="javascript:void(0);" id="export_copy" class="navi-link">
                    <i class="navi-icon fa fa-copy"></i> {{ trans('default.button.export.copy') }}
                  </a>
                </li>
                <li class="navi-item" data-toggle="tooltip" title="{{ trans('default.button.export.excel-description') }}">
                  <a href="javascript:void(0);" id="export_excel" class="navi-link">
                    <i class="navi-icon fa fa-file-excel"></i> {{ trans('default.button.export.excel') }}
                  </a>
                </li>
                <li class="navi-item" data-toggle="tooltip" title="{{ trans('default.button.export.pdf-description') }}">
                  <a href="javascript:void(0);" id="export_pdf" class="navi-link">
                    <i class="navi-icon fa fa-file-pdf"></i> {{ trans('default.button.export.pdf') }}
                  </a>
                </li>
                <li class="navi-item" data-toggle="tooltip" title="{{ trans('default.button.export.csv-description') }}">
                  <a href="javascript:void(0);" id="export_csv" class="navi-link">
                    <i class="navi-icon fa fa-file"></i> {{ trans('default.button.export.csv') }}
                  </a>
                </li>
                <li class="navi-item" data-toggle="tooltip" title="{{ trans('default.button.export.print-description') }}">
                  <a href="javascript:void(0);" id="export_print" class="navi-link">
                    <i class="navi-icon fa fa-print"></i> {{ trans('default.button.export.print') }}
                  </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="collapse" id="kt_datatable_group_action_form">
            <a data-url="" class="delete-all btn btn-sm btn-icon btn-clean btn-icon-md"  data-toggle="tooltip" title="{{ trans('default.label.refresh') }}"><i class="text-danger fas fa-trash"></i></a>
          </div>
          <a class="btn btn-sm btn-icon btn-clean btn-light-md" data-card-tool="toggle"><i class="fas fa-caret-down"></i></a>
        </div>
      </div>

      <div class="card-body">
        <div class="row">
          <div class="col-lg-9">
            <div class="row align-items-center">

              <div class="col-sm-2 my-2 my-lg-0">
                <div class="d-flex align-items-center">
                  <select data-column="-2" class="form-control filter-active">
                    <option value=""> - Select Active - </option>
                    <option value="1"> Yes </option>
                    <option value="2"> No </option>
                  </select>
                </div>
              </div>

              @stack('filter-header')

              @if ( !empty($status) && $status == 'true')
              <div class="col-md-2 my-2 my-md-0">
                <div class="d-flex align-items-center">
                  <select data-column="2" class="form-control filter-status">
                    <option value=""> - {{ trans('default.label.filter-status') }} - </option>
                    <option value="1"> {{ trans('default.label.done') }} </option>
                    <option value="2"> {{ trans('default.label.pending') }} </option>
                  </select>
                </div>
              </div>
              @endif

              <div class="col-md-1 my-1 my-md-0">
                <div class="d-flex align-items-center">
                  <button type="reset" name="reset" id="reset" class="form-control btn btn-sm btn-outline-info" data-toggle="tooltip" title="{{ trans('default.button.reset-filter') }}">
                    <i class="la la-refresh"></i>
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <hr>
        <div class="table-responsive">
          <table width="100%" class="table table-striped-table-bordered table-hover table-checkable" id="exilednoname">
            <thead>
              <tr>
                <th class="no-export"> </th>
                <th> No. </th>
                @if ( !empty($status) && $status == 'true')
                <th class="no-export"> Status </th>
                @endif
                @stack('content-head')
                <th class="no-export"> Active </th>
                <th class="no-export"> </th>
              </tr>
            </thead>
          </table>
        </div>
      </div>


    </div>
  </div>
</div>

<div class="kt-section__body">

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Start </label>
    <div class="col-lg-9">
      {!! Form::text('date_start', (isset($data->date_start) ? $data->date_start : \Carbon\Carbon::now()->add(-30,'minute')->format('Y-m-d H:i')), ['id' => 'ex_datetimepicker_start','class' => $errors->has('date_start') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('date_start') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Selesai </label>
    <div class="col-lg-9">
      {!! Form::text('date_end', (isset($data->date_end) ? $data->date_end : \Carbon\Carbon::now()->format('Y-m-d H:i')), ['id' => 'ex_datetimepicker_finish','class' => $errors->has('date_end') ? 'form-control is-invalid' : 'form-control', 'required' => 'required']) !!}
      @error('date_end') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> VMS </label>
    <div class="col-lg-9">
      {!! Form::select('id_directory', vms_directories(), (isset($data->id_directory) ? $data->id_directory : NULL), ['placeholder' => '- Select VMS -', 'class' => 'form-control', 'required' => 'required']) !!}
      @error('id_directory') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Permasalahan </label>
    <div class="col-lg-9">
      {!! Form::textarea('name', (isset($data->name) ? $data->name : ''), ['class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'rows'=>'3']) !!}
      @error('name') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Tindakan </label>
    <div class="col-lg-9">
      {!! Form::textarea('troubleshoot', (isset($data->troubleshoot) ? $data->troubleshoot : ''), ['class' => $errors->has('troubleshoot') ? 'form-control is-invalid' : 'form-control', 'rows'=>'3']) !!}
      @error('troubleshoot') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> Keterangan </label>
    <div class="col-lg-9">
      {!! Form::textarea('description', (isset($data->description) ? $data->description : ''), ['class' => $errors->has('description') ? 'form-control is-invalid' : 'form-control', 'rows'=>'3']) !!}
      @error('description') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
    </div>
  </div>

  @include('extensions.datatable.page-form.main')

  <div class="form-group row">
    <label class="col-lg-3 col-form-label"> </label>
    <div class="col-lg-9">
      <input class="btn btn-primary pull-right" type="submit" value="{{ $formMode === 'edit' ? 'Update' : 'Create' }}">
    </div>
  </div>

</div>

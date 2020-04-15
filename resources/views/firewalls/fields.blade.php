<!-- Frw Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('frw_id', __('models/firewall.fields.frw_id').':') !!}
    {!! Form::number('frw_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Frw Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('frw_status', __('models/firewall.fields.frw_status').':') !!}
    {!! Form::text('frw_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Frw Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('frw_data', __('models/firewall.fields.frw_data').':') !!}
    {!! Form::text('frw_data', null, ['class' => 'form-control','id'=>'frw_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#frw_data').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Frw Motivo Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('frw_motivo', __('models/firewall.fields.frw_motivo').':') !!}
    {!! Form::textarea('frw_motivo', null, ['class' => 'form-control']) !!}
</div>
@push('scripts')
    <script type="text/javascript">
        CKEDITOR.replace('frw_motivo', {
          language: '{{ strtolower(config('app.locale')) }}',
          height: '150px',
        })
    </script>
@endpush


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('firewalls.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

<!-- Log Datahora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('log_datahora', __('models/logchamadas.fields.log_datahora').':') !!}
    {!! Form::text('log_datahora', null, ['class' => 'form-control','id'=>'log_datahora']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#log_datahora').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Log Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('log_destino', __('models/logchamadas.fields.log_destino').':') !!}
    {!! Form::text('log_destino', null, ['class' => 'form-control']) !!}
</div>

<!-- Log Texto Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('log_texto', __('models/logchamadas.fields.log_texto').':') !!}
    {!! Form::textarea('log_texto', null, ['class' => 'form-control']) !!}
</div>
@push('scripts')
    <script type="text/javascript">
        CKEDITOR.replace('log_texto', {
          language: '{{ strtolower(config('app.locale')) }}',
          height: '150px',
        })
    </script>
@endpush


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('logChamadas.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

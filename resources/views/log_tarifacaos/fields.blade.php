<!-- Lgt Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lgt_representante_id', __('models/logtarifacao.fields.lgt_representante_id').':') !!}
    {!! Form::number('lgt_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Lgt Assinante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lgt_assinante', __('models/logtarifacao.fields.lgt_assinante').':') !!}
    {!! Form::text('lgt_assinante', null, ['class' => 'form-control']) !!}
</div>

<!-- Lgt Tptarifacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lgt_tptarifacao', __('models/logtarifacao.fields.lgt_tptarifacao').':') !!}
    {!! Form::text('lgt_tptarifacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Lgt Data Ini Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lgt_data_ini', __('models/logtarifacao.fields.lgt_data_ini').':') !!}
    {!! Form::text('lgt_data_ini', null, ['class' => 'form-control','id'=>'lgt_data_ini']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#lgt_data_ini').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Lgt Hora Ini Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lgt_hora_ini', __('models/logtarifacao.fields.lgt_hora_ini').':') !!}
    {!! Form::text('lgt_hora_ini', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('logTarifacaos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

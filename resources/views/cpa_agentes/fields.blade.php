<!-- Cpa Agente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpa_agente_id', __('models/cpaagente.fields.cpa_agente_id').':') !!}
    {!! Form::number('cpa_agente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpa Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpa_data', __('models/cpaagente.fields.cpa_data').':') !!}
    {!! Form::text('cpa_data', null, ['class' => 'form-control','id'=>'cpa_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#cpa_data').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Cpa Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpa_hora', __('models/cpaagente.fields.cpa_hora').':') !!}
    {!! Form::text('cpa_hora', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpa Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpa_valor', __('models/cpaagente.fields.cpa_valor').':') !!}
    {!! Form::number('cpa_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpa Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpa_status', __('models/cpaagente.fields.cpa_status').':') !!}
    {!! Form::text('cpa_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpa Dataliberou Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpa_dataliberou', __('models/cpaagente.fields.cpa_dataliberou').':') !!}
    {!! Form::text('cpa_dataliberou', null, ['class' => 'form-control','id'=>'cpa_dataliberou']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#cpa_dataliberou').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Cpa Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpa_tipo', __('models/cpaagente.fields.cpa_tipo').':') !!}
    {!! Form::text('cpa_tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpa Historico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpa_historico', __('models/cpaagente.fields.cpa_historico').':') !!}
    {!! Form::text('cpa_historico', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpa Boleto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpa_boleto', __('models/cpaagente.fields.cpa_boleto').':') !!}
    {!! Form::text('cpa_boleto', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpa Saldoanterior Rev Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpa_saldoanterior_rev', __('models/cpaagente.fields.cpa_saldoanterior_rev').':') !!}
    {!! Form::number('cpa_saldoanterior_rev', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpa Comprovacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpa_comprovacao', __('models/cpaagente.fields.cpa_comprovacao').':') !!}
    {!! Form::text('cpa_comprovacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpa Estorno Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpa_estorno_id', __('models/cpaagente.fields.cpa_estorno_id').':') !!}
    {!! Form::number('cpa_estorno_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cpaAgentes.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

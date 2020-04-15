<!-- Cns Assinante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cns_assinante_id', __('models/consumo.fields.cns_assinante_id').':') !!}
    {!! Form::text('cns_assinante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cns Data Ini Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cns_data_ini', __('models/consumo.fields.cns_data_ini').':') !!}
    {!! Form::text('cns_data_ini', null, ['class' => 'form-control','id'=>'cns_data_ini']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#cns_data_ini').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Cns Data Fin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cns_data_fin', __('models/consumo.fields.cns_data_fin').':') !!}
    {!! Form::text('cns_data_fin', null, ['class' => 'form-control','id'=>'cns_data_fin']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#cns_data_fin').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Cns Segundos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cns_segundos', __('models/consumo.fields.cns_segundos').':') !!}
    {!! Form::number('cns_segundos', null, ['class' => 'form-control']) !!}
</div>

<!-- Cns Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cns_destino', __('models/consumo.fields.cns_destino').':') !!}
    {!! Form::text('cns_destino', null, ['class' => 'form-control']) !!}
</div>

<!-- Cns Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cns_valor', __('models/consumo.fields.cns_valor').':') !!}
    {!! Form::number('cns_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Cns Valor Repr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cns_valor_repr', __('models/consumo.fields.cns_valor_repr').':') !!}
    {!! Form::number('cns_valor_repr', null, ['class' => 'form-control']) !!}
</div>

<!-- Cns Valor Master Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cns_valor_master', __('models/consumo.fields.cns_valor_master').':') !!}
    {!! Form::number('cns_valor_master', null, ['class' => 'form-control']) !!}
</div>

<!-- Cns Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cns_representante_id', __('models/consumo.fields.cns_representante_id').':') !!}
    {!! Form::number('cns_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cns Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cns_fornecedor_id', __('models/consumo.fields.cns_fornecedor_id').':') !!}
    {!! Form::number('cns_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cns Terminacao Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cns_terminacao_id', __('models/consumo.fields.cns_terminacao_id').':') !!}
    {!! Form::number('cns_terminacao_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cns Ip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cns_ip', __('models/consumo.fields.cns_ip').':') !!}
    {!! Form::text('cns_ip', null, ['class' => 'form-control']) !!}
</div>

<!-- Cns Uniqueid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cns_uniqueid', __('models/consumo.fields.cns_uniqueid').':') !!}
    {!! Form::text('cns_uniqueid', null, ['class' => 'form-control']) !!}
</div>

<!-- Cns Cabine Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cns_cabine_id', __('models/consumo.fields.cns_cabine_id').':') !!}
    {!! Form::number('cns_cabine_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cns Valor Agente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cns_valor_agente', __('models/consumo.fields.cns_valor_agente').':') !!}
    {!! Form::number('cns_valor_agente', null, ['class' => 'form-control']) !!}
</div>

<!-- Cns Valor Vendedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cns_valor_vendedor', __('models/consumo.fields.cns_valor_vendedor').':') !!}
    {!! Form::number('cns_valor_vendedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Cns Tptarifacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cns_tptarifacao', __('models/consumo.fields.cns_tptarifacao').':') !!}
    {!! Form::text('cns_tptarifacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Cns Saldo Revendaagente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cns_saldo_revendaagente', __('models/consumo.fields.cns_saldo_revendaagente').':') !!}
    {!! Form::number('cns_saldo_revendaagente', null, ['class' => 'form-control']) !!}
</div>

<!-- Cns Tarifa Assinante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cns_tarifa_assinante', __('models/consumo.fields.cns_tarifa_assinante').':') !!}
    {!! Form::number('cns_tarifa_assinante', null, ['class' => 'form-control']) !!}
</div>

<!-- Cns Fone Origem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cns_fone_origem', __('models/consumo.fields.cns_fone_origem').':') !!}
    {!! Form::text('cns_fone_origem', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('consumos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

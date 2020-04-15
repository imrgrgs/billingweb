<!-- Cnt Assinante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnt_assinante_id', __('models/contratacao.fields.cnt_assinante_id').':') !!}
    {!! Form::number('cnt_assinante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnt Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnt_data', __('models/contratacao.fields.cnt_data').':') !!}
    {!! Form::text('cnt_data', null, ['class' => 'form-control','id'=>'cnt_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#cnt_data').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Cnt Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnt_hora', __('models/contratacao.fields.cnt_hora').':') !!}
    {!! Form::text('cnt_hora', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnt Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnt_valor', __('models/contratacao.fields.cnt_valor').':') !!}
    {!! Form::number('cnt_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnt Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnt_status', __('models/contratacao.fields.cnt_status').':') !!}
    {!! Form::text('cnt_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnt Dataliberou Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnt_dataliberou', __('models/contratacao.fields.cnt_dataliberou').':') !!}
    {!! Form::text('cnt_dataliberou', null, ['class' => 'form-control','id'=>'cnt_dataliberou']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#cnt_dataliberou').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Cnt Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnt_tipo', __('models/contratacao.fields.cnt_tipo').':') !!}
    {!! Form::text('cnt_tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnt Historico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnt_historico', __('models/contratacao.fields.cnt_historico').':') !!}
    {!! Form::text('cnt_historico', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnt Boleto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnt_boleto', __('models/contratacao.fields.cnt_boleto').':') !!}
    {!! Form::text('cnt_boleto', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnt Agente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnt_agente_id', __('models/contratacao.fields.cnt_agente_id').':') !!}
    {!! Form::number('cnt_agente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnt Saldo Repres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnt_saldo_repres', __('models/contratacao.fields.cnt_saldo_repres').':') !!}
    {!! Form::number('cnt_saldo_repres', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnt Percentual Rev Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnt_percentual_rev', __('models/contratacao.fields.cnt_percentual_rev').':') !!}
    {!! Form::number('cnt_percentual_rev', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnt Percentual Assin Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnt_percentual_assin', __('models/contratacao.fields.cnt_percentual_assin').':') !!}
    {!! Form::number('cnt_percentual_assin', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnt Saldo Assin Ant Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnt_saldo_assin_ant', __('models/contratacao.fields.cnt_saldo_assin_ant').':') !!}
    {!! Form::number('cnt_saldo_assin_ant', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnt Saldo Rev Ant Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnt_saldo_rev_ant', __('models/contratacao.fields.cnt_saldo_rev_ant').':') !!}
    {!! Form::number('cnt_saldo_rev_ant', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnt Comprovacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnt_comprovacao', __('models/contratacao.fields.cnt_comprovacao').':') !!}
    {!! Form::text('cnt_comprovacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnt Estorno Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnt_estorno_id', __('models/contratacao.fields.cnt_estorno_id').':') !!}
    {!! Form::number('cnt_estorno_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contratacaos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

<!-- Lge Assinante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lge_assinante', __('models/ligacoes.fields.lge_assinante').':') !!}
    {!! Form::text('lge_assinante', null, ['class' => 'form-control']) !!}
</div>

<!-- Lge Datainicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lge_datainicio', __('models/ligacoes.fields.lge_datainicio').':') !!}
    {!! Form::text('lge_datainicio', null, ['class' => 'form-control','id'=>'lge_datainicio']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#lge_datainicio').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Lge Datafim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lge_datafim', __('models/ligacoes.fields.lge_datafim').':') !!}
    {!! Form::text('lge_datafim', null, ['class' => 'form-control','id'=>'lge_datafim']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#lge_datafim').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Lge Segundos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lge_segundos', __('models/ligacoes.fields.lge_segundos').':') !!}
    {!! Form::number('lge_segundos', null, ['class' => 'form-control']) !!}
</div>

<!-- Lge Fone Origem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lge_fone_origem', __('models/ligacoes.fields.lge_fone_origem').':') !!}
    {!! Form::text('lge_fone_origem', null, ['class' => 'form-control']) !!}
</div>

<!-- Lge Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lge_valor', __('models/ligacoes.fields.lge_valor').':') !!}
    {!! Form::number('lge_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Lge Valor Agente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lge_valor_agente', __('models/ligacoes.fields.lge_valor_agente').':') !!}
    {!! Form::number('lge_valor_agente', null, ['class' => 'form-control']) !!}
</div>

<!-- Lge Valor Repres Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lge_valor_repres', __('models/ligacoes.fields.lge_valor_repres').':') !!}
    {!! Form::number('lge_valor_repres', null, ['class' => 'form-control']) !!}
</div>

<!-- Lge Valor Master Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lge_valor_master', __('models/ligacoes.fields.lge_valor_master').':') !!}
    {!! Form::number('lge_valor_master', null, ['class' => 'form-control']) !!}
</div>

<!-- Lge Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lge_representante_id', __('models/ligacoes.fields.lge_representante_id').':') !!}
    {!! Form::number('lge_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Lge Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lge_fornecedor_id', __('models/ligacoes.fields.lge_fornecedor_id').':') !!}
    {!! Form::number('lge_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Lge Gvt Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lge_gvt_id', __('models/ligacoes.fields.lge_gvt_id').':') !!}
    {!! Form::number('lge_gvt_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Lge Tptarifacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lge_tptarifacao', __('models/ligacoes.fields.lge_tptarifacao').':') !!}
    {!! Form::text('lge_tptarifacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Lge Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lge_status', __('models/ligacoes.fields.lge_status').':') !!}
    {!! Form::text('lge_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ligacaos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

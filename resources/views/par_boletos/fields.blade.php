<!-- Bol Empresa Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bol_empresa_id', __('models/parboleto.fields.bol_empresa_id').':') !!}
    {!! Form::number('bol_empresa_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Bol Banco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bol_banco', __('models/parboleto.fields.bol_banco').':') !!}
    {!! Form::number('bol_banco', null, ['class' => 'form-control']) !!}
</div>

<!-- Bol Agencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bol_agencia', __('models/parboleto.fields.bol_agencia').':') !!}
    {!! Form::number('bol_agencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Bol Conta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bol_conta', __('models/parboleto.fields.bol_conta').':') !!}
    {!! Form::text('bol_conta', null, ['class' => 'form-control']) !!}
</div>

<!-- Bol Localpagamento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bol_localpagamento', __('models/parboleto.fields.bol_localpagamento').':') !!}
    {!! Form::text('bol_localpagamento', null, ['class' => 'form-control']) !!}
</div>

<!-- Bol Carteira Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bol_carteira', __('models/parboleto.fields.bol_carteira').':') !!}
    {!! Form::text('bol_carteira', null, ['class' => 'form-control']) !!}
</div>

<!-- Bol Instrucao1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bol_instrucao1', __('models/parboleto.fields.bol_instrucao1').':') !!}
    {!! Form::text('bol_instrucao1', null, ['class' => 'form-control']) !!}
</div>

<!-- Bol Instrucao2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bol_instrucao2', __('models/parboleto.fields.bol_instrucao2').':') !!}
    {!! Form::text('bol_instrucao2', null, ['class' => 'form-control']) !!}
</div>

<!-- Bol Instrucao3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bol_instrucao3', __('models/parboleto.fields.bol_instrucao3').':') !!}
    {!! Form::text('bol_instrucao3', null, ['class' => 'form-control']) !!}
</div>

<!-- Bol Instrucao4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bol_instrucao4', __('models/parboleto.fields.bol_instrucao4').':') !!}
    {!! Form::text('bol_instrucao4', null, ['class' => 'form-control']) !!}
</div>

<!-- Bol Instrucao5 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bol_instrucao5', __('models/parboleto.fields.bol_instrucao5').':') !!}
    {!! Form::text('bol_instrucao5', null, ['class' => 'form-control']) !!}
</div>

<!-- Bol Nossonumero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bol_nossonumero', __('models/parboleto.fields.bol_nossonumero').':') !!}
    {!! Form::text('bol_nossonumero', null, ['class' => 'form-control']) !!}
</div>

<!-- Bol Percjuros Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bol_percjuros', __('models/parboleto.fields.bol_percjuros').':') !!}
    {!! Form::number('bol_percjuros', null, ['class' => 'form-control']) !!}
</div>

<!-- Bol Taxabancaria Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bol_taxabancaria', __('models/parboleto.fields.bol_taxabancaria').':') !!}
    {!! Form::number('bol_taxabancaria', null, ['class' => 'form-control']) !!}
</div>

<!-- Bol Tetotxbanc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bol_tetotxbanc', __('models/parboleto.fields.bol_tetotxbanc').':') !!}
    {!! Form::number('bol_tetotxbanc', null, ['class' => 'form-control']) !!}
</div>

<!-- Bol Vlrminimo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bol_vlrminimo', __('models/parboleto.fields.bol_vlrminimo').':') !!}
    {!! Form::number('bol_vlrminimo', null, ['class' => 'form-control']) !!}
</div>

<!-- Bol Convenio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bol_convenio', __('models/parboleto.fields.bol_convenio').':') !!}
    {!! Form::number('bol_convenio', null, ['class' => 'form-control']) !!}
</div>

<!-- Bol Qtd Dias Vcto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bol_qtd_dias_vcto', __('models/parboleto.fields.bol_qtd_dias_vcto').':') !!}
    {!! Form::number('bol_qtd_dias_vcto', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('parBoletos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

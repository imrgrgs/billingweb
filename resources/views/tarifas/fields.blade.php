<!-- Tar Grupo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tar_grupo_id', __('models/tarifas1.fields.tar_grupo_id').':') !!}
    {!! Form::number('tar_grupo_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tar Fonecode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tar_fonecode', __('models/tarifas1.fields.tar_fonecode').':') !!}
    {!! Form::text('tar_fonecode', null, ['class' => 'form-control']) !!}
</div>

<!-- Tar Valor1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tar_valor1', __('models/tarifas1.fields.tar_valor1').':') !!}
    {!! Form::number('tar_valor1', null, ['class' => 'form-control']) !!}
</div>

<!-- Tar Valor2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tar_valor2', __('models/tarifas1.fields.tar_valor2').':') !!}
    {!! Form::number('tar_valor2', null, ['class' => 'form-control']) !!}
</div>

<!-- Tar Valor3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tar_valor3', __('models/tarifas1.fields.tar_valor3').':') !!}
    {!! Form::number('tar_valor3', null, ['class' => 'form-control']) !!}
</div>

<!-- Tar Valor4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tar_valor4', __('models/tarifas1.fields.tar_valor4').':') !!}
    {!! Form::number('tar_valor4', null, ['class' => 'form-control']) !!}
</div>

<!-- Tar Valor5 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tar_valor5', __('models/tarifas1.fields.tar_valor5').':') !!}
    {!! Form::number('tar_valor5', null, ['class' => 'form-control']) !!}
</div>

<!-- Tar Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tar_fornecedor_id', __('models/tarifas1.fields.tar_fornecedor_id').':') !!}
    {!! Form::number('tar_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tar Valor Diferenciado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tar_valor_diferenciado', __('models/tarifas1.fields.tar_valor_diferenciado').':') !!}
    {!! Form::number('tar_valor_diferenciado', null, ['class' => 'form-control']) !!}
</div>

<!-- Tar Terminacao Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tar_terminacao_id', __('models/tarifas1.fields.tar_terminacao_id').':') !!}
    {!! Form::number('tar_terminacao_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tar Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tar_tipo', __('models/tarifas1.fields.tar_tipo').':') !!}
    {!! Form::text('tar_tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Tar Fazpartefixado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tar_fazpartefixado', __('models/tarifas1.fields.tar_fazpartefixado').':') !!}
    {!! Form::text('tar_fazpartefixado', null, ['class' => 'form-control']) !!}
</div>

<!-- Tar Terminacao2 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tar_terminacao2_id', __('models/tarifas1.fields.tar_terminacao2_id').':') !!}
    {!! Form::number('tar_terminacao2_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tar Terminacao3 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tar_terminacao3_id', __('models/tarifas1.fields.tar_terminacao3_id').':') !!}
    {!! Form::number('tar_terminacao3_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tar Master Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tar_master', __('models/tarifas1.fields.tar_master').':') !!}
    {!! Form::text('tar_master', null, ['class' => 'form-control']) !!}
</div>

<!-- Tar Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tar_descricao', __('models/tarifas1.fields.tar_descricao').':') !!}
    {!! Form::text('tar_descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Tar Terminacao Fax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tar_terminacao_fax', __('models/tarifas1.fields.tar_terminacao_fax').':') !!}
    {!! Form::number('tar_terminacao_fax', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tarifas.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

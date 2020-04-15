<!-- Tax Pais Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tax_pais_id', __('models/taxas.fields.tax_pais_id').':') !!}
    {!! Form::number('tax_pais_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tax Plano Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tax_plano_id', __('models/taxas.fields.tax_plano_id').':') !!}
    {!! Form::number('tax_plano_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tax Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tax_tipo', __('models/taxas.fields.tax_tipo').':') !!}
    {!! Form::text('tax_tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Tax Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tax_valor', __('models/taxas.fields.tax_valor').':') !!}
    {!! Form::number('tax_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Tax Valorfora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tax_valorfora', __('models/taxas.fields.tax_valorfora').':') !!}
    {!! Form::number('tax_valorfora', null, ['class' => 'form-control']) !!}
</div>

<!-- Tax Vlrfornecedor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tax_vlrfornecedor', __('models/taxas.fields.tax_vlrfornecedor').':') !!}
    {!! Form::number('tax_vlrfornecedor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('taxas.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

<!-- Nao Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nao_destino', __('models/naotarifadosterm.fields.nao_destino').':') !!}
    {!! Form::text('nao_destino', null, ['class' => 'form-control']) !!}
</div>

<!-- Nao Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nao_fornecedor_id', __('models/naotarifadosterm.fields.nao_fornecedor_id').':') !!}
    {!! Form::number('nao_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nao Terminacao Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nao_terminacao_id', __('models/naotarifadosterm.fields.nao_terminacao_id').':') !!}
    {!! Form::number('nao_terminacao_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Nao Segundos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nao_segundos', __('models/naotarifadosterm.fields.nao_segundos').':') !!}
    {!! Form::number('nao_segundos', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('naoTarifadoTerms.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

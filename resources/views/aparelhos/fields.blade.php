<!-- Apa Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apa_descricao', __('models/aparelhos.fields.apa_descricao').':') !!}
    {!! Form::text('apa_descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Apa Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apa_valor', __('models/aparelhos.fields.apa_valor').':') !!}
    {!! Form::number('apa_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Apa Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('apa_fornecedor_id', __('models/aparelhos.fields.apa_fornecedor_id').':') !!}
    {!! Form::number('apa_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('aparelhos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

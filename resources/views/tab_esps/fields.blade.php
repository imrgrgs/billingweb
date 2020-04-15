<!-- Tbe Fonecode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tbe_fonecode', __('models/tabesp_10001.fields.tbe_fonecode').':') !!}
    {!! Form::text('tbe_fonecode', null, ['class' => 'form-control']) !!}
</div>

<!-- Tbe Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tbe_descricao', __('models/tabesp_10001.fields.tbe_descricao').':') !!}
    {!! Form::text('tbe_descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Tbe Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tbe_tipo', __('models/tabesp_10001.fields.tbe_tipo').':') !!}
    {!! Form::text('tbe_tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Tbe Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tbe_valor', __('models/tabesp_10001.fields.tbe_valor').':') !!}
    {!! Form::number('tbe_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tabEsps.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

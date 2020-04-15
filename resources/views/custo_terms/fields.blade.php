<!-- Ctt Fonecode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ctt_fonecode', __('models/custoterm10.fields.ctt_fonecode').':') !!}
    {!! Form::text('ctt_fonecode', null, ['class' => 'form-control']) !!}
</div>

<!-- Ctt Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ctt_descricao', __('models/custoterm10.fields.ctt_descricao').':') !!}
    {!! Form::text('ctt_descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Ctt Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ctt_valor', __('models/custoterm10.fields.ctt_valor').':') !!}
    {!! Form::number('ctt_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('custoTerms.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

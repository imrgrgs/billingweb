<!-- Tbr Tarifacao Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tbr_tarifacao_id', __('models/tabelarep1.fields.tbr_tarifacao_id').':') !!}
    {!! Form::number('tbr_tarifacao_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tbr Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tbr_valor', __('models/tabelarep1.fields.tbr_valor').':') !!}
    {!! Form::number('tbr_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Tbr Terminacao Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tbr_terminacao_id', __('models/tabelarep1.fields.tbr_terminacao_id').':') !!}
    {!! Form::number('tbr_terminacao_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tabelaReps.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

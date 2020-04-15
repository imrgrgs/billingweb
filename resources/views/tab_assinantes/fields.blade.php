<!-- Tab Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tab_codigo', __('models/tabassinante18.fields.tab_codigo').':') !!}
    {!! Form::text('tab_codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Tab Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tab_descricao', __('models/tabassinante18.fields.tab_descricao').':') !!}
    {!! Form::text('tab_descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Tab Agente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tab_agente_id', __('models/tabassinante18.fields.tab_agente_id').':') !!}
    {!! Form::number('tab_agente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tabAssinantes.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

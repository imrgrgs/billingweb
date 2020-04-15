<!-- Tab Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tab_codigo', __('models/tabrevendas1.fields.tab_codigo').':') !!}
    {!! Form::text('tab_codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Tab Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tab_descricao', __('models/tabrevendas1.fields.tab_descricao').':') !!}
    {!! Form::text('tab_descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tabRevendas.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

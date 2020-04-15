<!-- Gru Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gru_descricao', __('models/grupos.fields.gru_descricao').':') !!}
    {!! Form::text('gru_descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('grupos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

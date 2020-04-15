<!-- Vtov Origem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vtov_origem', __('models/voiptovoip.fields.vtov_origem').':') !!}
    {!! Form::text('vtov_origem', null, ['class' => 'form-control']) !!}
</div>

<!-- Vtov Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vtov_destino', __('models/voiptovoip.fields.vtov_destino').':') !!}
    {!! Form::text('vtov_destino', null, ['class' => 'form-control']) !!}
</div>

<!-- Vtov Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vtov_representante_id', __('models/voiptovoip.fields.vtov_representante_id').':') !!}
    {!! Form::number('vtov_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Vtov Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vtov_fornecedor_id', __('models/voiptovoip.fields.vtov_fornecedor_id').':') !!}
    {!! Form::number('vtov_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('voipToVoips.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

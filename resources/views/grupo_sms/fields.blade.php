<!-- Gsms Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gsms_nome', __('models/grupossms.fields.gsms_nome').':') !!}
    {!! Form::text('gsms_nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Gsms Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gsms_fornecedor_id', __('models/grupossms.fields.gsms_fornecedor_id').':') !!}
    {!! Form::number('gsms_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Gsms Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gsms_representante_id', __('models/grupossms.fields.gsms_representante_id').':') !!}
    {!! Form::number('gsms_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Gsms Assinante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gsms_assinante_id', __('models/grupossms.fields.gsms_assinante_id').':') !!}
    {!! Form::number('gsms_assinante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('grupoSms.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

<!-- Gsms Nome Field -->
<div class="form-group">
    {!! Form::label('gsms_nome', __('models/grupossms.fields.gsms_nome').':') !!}
    <p>{{ $grupoSms->gsms_nome }}</p>
</div>

<!-- Gsms Fornecedor Id Field -->
<div class="form-group">
    {!! Form::label('gsms_fornecedor_id', __('models/grupossms.fields.gsms_fornecedor_id').':') !!}
    <p>{{ $grupoSms->gsms_fornecedor_id }}</p>
</div>

<!-- Gsms Representante Id Field -->
<div class="form-group">
    {!! Form::label('gsms_representante_id', __('models/grupossms.fields.gsms_representante_id').':') !!}
    <p>{{ $grupoSms->gsms_representante_id }}</p>
</div>

<!-- Gsms Assinante Id Field -->
<div class="form-group">
    {!! Form::label('gsms_assinante_id', __('models/grupossms.fields.gsms_assinante_id').':') !!}
    <p>{{ $grupoSms->gsms_assinante_id }}</p>
</div>


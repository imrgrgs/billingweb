<!-- Onl Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('onl_fornecedor_id', __('models/ligonline.fields.onl_fornecedor_id').':') !!}
    {!! Form::number('onl_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Onl Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('onl_representante_id', __('models/ligonline.fields.onl_representante_id').':') !!}
    {!! Form::number('onl_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Onl Agente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('onl_agente_id', __('models/ligonline.fields.onl_agente_id').':') !!}
    {!! Form::number('onl_agente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Onl Assinante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('onl_assinante_id', __('models/ligonline.fields.onl_assinante_id').':') !!}
    {!! Form::number('onl_assinante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Onl Username Field -->
<div class="form-group col-sm-6">
    {!! Form::label('onl_username', __('models/ligonline.fields.onl_username').':') !!}
    {!! Form::text('onl_username', null, ['class' => 'form-control']) !!}
</div>

<!-- Onl Tempo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('onl_tempo', __('models/ligonline.fields.onl_tempo').':') !!}
    {!! Form::text('onl_tempo', null, ['class' => 'form-control']) !!}
</div>

<!-- Onl Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('onl_destino', __('models/ligonline.fields.onl_destino').':') !!}
    {!! Form::text('onl_destino', null, ['class' => 'form-control']) !!}
</div>

<!-- Onl Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('onl_status', __('models/ligonline.fields.onl_status').':') !!}
    {!! Form::text('onl_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Onl Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('onl_nome', __('models/ligonline.fields.onl_nome').':') !!}
    {!! Form::text('onl_nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Onl Terminacao Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('onl_terminacao_id', __('models/ligonline.fields.onl_terminacao_id').':') !!}
    {!! Form::number('onl_terminacao_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Onl Channel Origem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('onl_channel_origem', __('models/ligonline.fields.onl_channel_origem').':') !!}
    {!! Form::text('onl_channel_origem', null, ['class' => 'form-control']) !!}
</div>

<!-- Onl Channel Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('onl_channel_destino', __('models/ligonline.fields.onl_channel_destino').':') !!}
    {!! Form::text('onl_channel_destino', null, ['class' => 'form-control']) !!}
</div>

<!-- Onl Cabine Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('onl_cabine_id', __('models/ligonline.fields.onl_cabine_id').':') !!}
    {!! Form::number('onl_cabine_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Onl Nro Origem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('onl_nro_origem', __('models/ligonline.fields.onl_nro_origem').':') !!}
    {!! Form::text('onl_nro_origem', null, ['class' => 'form-control']) !!}
</div>

<!-- Onl Callingcard Field -->
<div class="form-group col-sm-6">
    {!! Form::label('onl_callingcard', __('models/ligonline.fields.onl_callingcard').':') !!}
    {!! Form::text('onl_callingcard', null, ['class' => 'form-control']) !!}
</div>

<!-- Onl Ip Servidor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('onl_ip_servidor', __('models/ligonline.fields.onl_ip_servidor').':') !!}
    {!! Form::text('onl_ip_servidor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ligOnlines.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

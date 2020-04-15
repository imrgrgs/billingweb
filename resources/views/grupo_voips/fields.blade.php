<!-- Grv Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grv_nome', __('models/gruposvoip.fields.grv_nome').':') !!}
    {!! Form::text('grv_nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Grv Estrategia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grv_estrategia', __('models/gruposvoip.fields.grv_estrategia').':') !!}
    {!! Form::text('grv_estrategia', null, ['class' => 'form-control']) !!}
</div>

<!-- Grv Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grv_representante_id', __('models/gruposvoip.fields.grv_representante_id').':') !!}
    {!! Form::number('grv_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Grv Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grv_fornecedor_id', __('models/gruposvoip.fields.grv_fornecedor_id').':') !!}
    {!! Form::number('grv_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Grv Musica Espera Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grv_musica_espera', __('models/gruposvoip.fields.grv_musica_espera').':') !!}
    {!! Form::text('grv_musica_espera', null, ['class' => 'form-control']) !!}
</div>

<!-- Grv Alias Grupo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grv_alias_grupo', __('models/gruposvoip.fields.grv_alias_grupo').':') !!}
    {!! Form::number('grv_alias_grupo', null, ['class' => 'form-control']) !!}
</div>

<!-- Grv Assinante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grv_assinante_id', __('models/gruposvoip.fields.grv_assinante_id').':') !!}
    {!! Form::number('grv_assinante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('grupoVoips.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

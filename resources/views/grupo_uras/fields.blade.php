<!-- Gru Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gru_nome', __('models/grupoURA.fields.gru_nome').':') !!}
    {!! Form::text('gru_nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Gru Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gru_representante_id', __('models/grupoURA.fields.gru_representante_id').':') !!}
    {!! Form::number('gru_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Gru Musica Espera Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gru_musica_espera', __('models/grupoURA.fields.gru_musica_espera').':') !!}
    {!! Form::text('gru_musica_espera', null, ['class' => 'form-control']) !!}
</div>

<!-- Gru Arquivo Ura Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gru_arquivo_ura', __('models/grupoURA.fields.gru_arquivo_ura').':') !!}
    {!! Form::text('gru_arquivo_ura', null, ['class' => 'form-control']) !!}
</div>

<!-- Gru Assinante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gru_assinante_id', __('models/grupoURA.fields.gru_assinante_id').':') !!}
    {!! Form::number('gru_assinante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('grupoUras.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

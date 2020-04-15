<!-- Gvt User Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_user', __('models/gvt.fields.gvt_user').':') !!}
    {!! Form::text('gvt_user', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Pass Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_pass', __('models/gvt.fields.gvt_pass').':') !!}
    {!! Form::text('gvt_pass', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Url Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_url', __('models/gvt.fields.gvt_url').':') !!}
    {!! Form::text('gvt_url', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Porta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_porta', __('models/gvt.fields.gvt_porta').':') !!}
    {!! Form::number('gvt_porta', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt User Fsol Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_user_fsol', __('models/gvt.fields.gvt_user_fsol').':') !!}
    {!! Form::text('gvt_user_fsol', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_status', __('models/gvt.fields.gvt_status').':') !!}
    {!! Form::text('gvt_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_fornecedor_id', __('models/gvt.fields.gvt_fornecedor_id').':') !!}
    {!! Form::number('gvt_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Numfone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_numfone', __('models/gvt.fields.gvt_numfone').':') !!}
    {!! Form::text('gvt_numfone', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Aplicacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_aplicacao', __('models/gvt.fields.gvt_aplicacao').':') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('gvt_aplicacao', 0) !!}
        {!! Form::checkbox('gvt_aplicacao', '1', null) !!} 1
    </label>
</div>

<!-- Gvt Vlr Callingcard Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_vlr_callingcard', __('models/gvt.fields.gvt_vlr_callingcard').':') !!}
    {!! Form::number('gvt_vlr_callingcard', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Tp Tarifacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_tp_tarifacao', __('models/gvt.fields.gvt_tp_tarifacao').':') !!}
    {!! Form::text('gvt_tp_tarifacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Fazer Registro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_fazer_registro', __('models/gvt.fields.gvt_fazer_registro').':') !!}
    {!! Form::text('gvt_fazer_registro', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Vlr Conexao Fixo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_vlr_conexao_fixo', __('models/gvt.fields.gvt_vlr_conexao_fixo').':') !!}
    {!! Form::number('gvt_vlr_conexao_fixo', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Vlr Conexao Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_vlr_conexao_celular', __('models/gvt.fields.gvt_vlr_conexao_celular').':') !!}
    {!! Form::number('gvt_vlr_conexao_celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Vlr Callingcard Cel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_vlr_callingcard_cel', __('models/gvt.fields.gvt_vlr_callingcard_cel').':') !!}
    {!! Form::number('gvt_vlr_callingcard_cel', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Identificador Via Uri Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_identificador_via_uri', __('models/gvt.fields.gvt_identificador_via_uri').':') !!}
    {!! Form::text('gvt_identificador_via_uri', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Arq Audio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_arq_audio', __('models/gvt.fields.gvt_arq_audio').':') !!}
    {!! Form::text('gvt_arq_audio', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Lig Gratuita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_lig_gratuita', __('models/gvt.fields.gvt_lig_gratuita').':') !!}
    {!! Form::text('gvt_lig_gratuita', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Tmp Maximo Gratuita Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_tmp_maximo_gratuita', __('models/gvt.fields.gvt_tmp_maximo_gratuita').':') !!}
    {!! Form::number('gvt_tmp_maximo_gratuita', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Codec1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_codec1', __('models/gvt.fields.gvt_codec1').':') !!}
    {!! Form::text('gvt_codec1', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Codec2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_codec2', __('models/gvt.fields.gvt_codec2').':') !!}
    {!! Form::text('gvt_codec2', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Codec3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_codec3', __('models/gvt.fields.gvt_codec3').':') !!}
    {!! Form::text('gvt_codec3', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Codec4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_codec4', __('models/gvt.fields.gvt_codec4').':') !!}
    {!! Form::text('gvt_codec4', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Codec5 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_codec5', __('models/gvt.fields.gvt_codec5').':') !!}
    {!! Form::text('gvt_codec5', null, ['class' => 'form-control']) !!}
</div>

<!-- Pode Transferir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pode_transferir', __('models/gvt.fields.pode_transferir').':') !!}
    {!! Form::text('pode_transferir', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_representante_id', __('models/gvt.fields.gvt_representante_id').':') !!}
    {!! Form::number('gvt_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Tabprecos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_tabprecos_id', __('models/gvt.fields.gvt_tabprecos_id').':') !!}
    {!! Form::number('gvt_tabprecos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Vlr Fx Revenda Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_vlr_fx_revenda', __('models/gvt.fields.gvt_vlr_fx_revenda').':') !!}
    {!! Form::number('gvt_vlr_fx_revenda', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Vlr Cel Revenda Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_vlr_cel_revenda', __('models/gvt.fields.gvt_vlr_cel_revenda').':') !!}
    {!! Form::number('gvt_vlr_cel_revenda', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Recebe De Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_recebe_de', __('models/gvt.fields.gvt_recebe_de').':') !!}
    {!! Form::number('gvt_recebe_de', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Lista Negra Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_lista_negra', __('models/gvt.fields.gvt_lista_negra').':') !!}
    {!! Form::number('gvt_lista_negra', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Tipo Atendimento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_tipo_atendimento', __('models/gvt.fields.gvt_tipo_atendimento').':') !!}
    {!! Form::number('gvt_tipo_atendimento', null, ['class' => 'form-control']) !!}
</div>

<!-- Gvt Telegram Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gvt_telegram_token', __('models/gvt.fields.gvt_telegram_token').':') !!}
    {!! Form::text('gvt_telegram_token', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('gvts.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

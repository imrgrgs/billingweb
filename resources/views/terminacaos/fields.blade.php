<!-- Pst Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_nome', __('models/terminacao.fields.pst_nome').':') !!}
    {!! Form::text('pst_nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Apelido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_apelido', __('models/terminacao.fields.pst_apelido').':') !!}
    {!! Form::text('pst_apelido', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Extension Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_extension', __('models/terminacao.fields.pst_extension').':') !!}
    {!! Form::text('pst_extension', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_fornecedor_id', __('models/terminacao.fields.pst_fornecedor_id').':') !!}
    {!! Form::number('pst_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Del Prefix Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_del_prefix', __('models/terminacao.fields.pst_del_prefix').':') !!}
    {!! Form::number('pst_del_prefix', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Channel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_channel', __('models/terminacao.fields.pst_channel').':') !!}
    {!! Form::text('pst_channel', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_status', __('models/terminacao.fields.pst_status').':') !!}
    {!! Form::text('pst_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_celular', __('models/terminacao.fields.pst_celular').':') !!}
    {!! Form::text('pst_celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Fixo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_fixo', __('models/terminacao.fields.pst_fixo').':') !!}
    {!! Form::text('pst_fixo', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Saldo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_saldo', __('models/terminacao.fields.pst_saldo').':') !!}
    {!! Form::number('pst_saldo', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Atualizado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_atualizado', __('models/terminacao.fields.pst_atualizado').':') !!}
    {!! Form::text('pst_atualizado', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Vlrfixo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_vlrfixo', __('models/terminacao.fields.pst_vlrfixo').':') !!}
    {!! Form::number('pst_vlrfixo', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Vlrcelular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_vlrcelular', __('models/terminacao.fields.pst_vlrcelular').':') !!}
    {!! Form::number('pst_vlrcelular', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Tp Tarifacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_tp_tarifacao', __('models/terminacao.fields.pst_tp_tarifacao').':') !!}
    {!! Form::text('pst_tp_tarifacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Obs Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('pst_obs', __('models/terminacao.fields.pst_obs').':') !!}
    {!! Form::textarea('pst_obs', null, ['class' => 'form-control']) !!}
</div>
@push('scripts')
    <script type="text/javascript">
        CKEDITOR.replace('pst_obs', {
          language: '{{ strtolower(config('app.locale')) }}',
          height: '150px',
        })
    </script>
@endpush


<!-- Pst Login Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_login', __('models/terminacao.fields.pst_login').':') !!}
    {!! Form::text('pst_login', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Senha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_senha', __('models/terminacao.fields.pst_senha').':') !!}
    {!! Form::text('pst_senha', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Ip Proxy Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_ip_proxy', __('models/terminacao.fields.pst_ip_proxy').':') !!}
    {!! Form::text('pst_ip_proxy', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Reinvite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_reinvite', __('models/terminacao.fields.pst_reinvite').':') !!}
    {!! Form::text('pst_reinvite', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Ringfalso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_ringfalso', __('models/terminacao.fields.pst_ringfalso').':') !!}
    {!! Form::text('pst_ringfalso', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Nomeficticio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_nomeficticio', __('models/terminacao.fields.pst_nomeficticio').':') !!}
    {!! Form::text('pst_nomeficticio', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Formacobranca Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_formacobranca', __('models/terminacao.fields.pst_formacobranca').':') !!}
    {!! Form::text('pst_formacobranca', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Finalidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_finalidade', __('models/terminacao.fields.pst_finalidade').':') !!}
    {!! Form::text('pst_finalidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Participa Mcusto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_participa_mcusto', __('models/terminacao.fields.pst_participa_mcusto').':') !!}
    {!! Form::text('pst_participa_mcusto', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Id Terminador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_id_terminador', __('models/terminacao.fields.pst_id_terminador').':') !!}
    {!! Form::text('pst_id_terminador', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Sgs Comecar Cobrar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_sgs_comecar_cobrar', __('models/terminacao.fields.pst_sgs_comecar_cobrar').':') !!}
    {!! Form::number('pst_sgs_comecar_cobrar', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Sgs Comecar Cobrar Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_sgs_comecar_cobrar_celular', __('models/terminacao.fields.pst_sgs_comecar_cobrar_celular').':') !!}
    {!! Form::number('pst_sgs_comecar_cobrar_celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Rota Automatica Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_rota_automatica', __('models/terminacao.fields.pst_rota_automatica').':') !!}
    {!! Form::text('pst_rota_automatica', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Custoemdolar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_custoemdolar', __('models/terminacao.fields.pst_custoemdolar').':') !!}
    {!! Form::text('pst_custoemdolar', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Limite Maximo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_limite_maximo', __('models/terminacao.fields.pst_limite_maximo').':') !!}
    {!! Form::number('pst_limite_maximo', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Consumido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_consumido', __('models/terminacao.fields.pst_consumido').':') !!}
    {!! Form::number('pst_consumido', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Qtde Utilizada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_qtde_utilizada', __('models/terminacao.fields.pst_qtde_utilizada').':') !!}
    {!! Form::number('pst_qtde_utilizada', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Configuracao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('pst_configuracao', __('models/terminacao.fields.pst_configuracao').':') !!}
    {!! Form::textarea('pst_configuracao', null, ['class' => 'form-control']) !!}
</div>
@push('scripts')
    <script type="text/javascript">
        CKEDITOR.replace('pst_configuracao', {
          language: '{{ strtolower(config('app.locale')) }}',
          height: '150px',
        })
    </script>
@endpush


<!-- Pst Fazerregister Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_fazerregister', __('models/terminacao.fields.pst_fazerregister').':') !!}
    {!! Form::text('pst_fazerregister', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Jaincluido Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_jaincluido', __('models/terminacao.fields.pst_jaincluido').':') !!}
    {!! Form::text('pst_jaincluido', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Codec1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_codec1', __('models/terminacao.fields.pst_codec1').':') !!}
    {!! Form::text('pst_codec1', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Codec2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_codec2', __('models/terminacao.fields.pst_codec2').':') !!}
    {!! Form::text('pst_codec2', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Codec3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_codec3', __('models/terminacao.fields.pst_codec3').':') !!}
    {!! Form::text('pst_codec3', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Codec4 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_codec4', __('models/terminacao.fields.pst_codec4').':') !!}
    {!! Form::text('pst_codec4', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Codec5 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_codec5', __('models/terminacao.fields.pst_codec5').':') !!}
    {!! Form::text('pst_codec5', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Porta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_porta', __('models/terminacao.fields.pst_porta').':') !!}
    {!! Form::text('pst_porta', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Digitos Eliminar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_digitos_eliminar', __('models/terminacao.fields.pst_digitos_eliminar').':') !!}
    {!! Form::number('pst_digitos_eliminar', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Caracteres Incluir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_caracteres_incluir', __('models/terminacao.fields.pst_caracteres_incluir').':') !!}
    {!! Form::text('pst_caracteres_incluir', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Tech Prefix Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_tech_prefix', __('models/terminacao.fields.pst_tech_prefix').':') !!}
    {!! Form::text('pst_tech_prefix', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Qtde Simultaneas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_qtde_simultaneas', __('models/terminacao.fields.pst_qtde_simultaneas').':') !!}
    {!! Form::number('pst_qtde_simultaneas', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Codigo Operadora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_codigo_operadora', __('models/terminacao.fields.pst_codigo_operadora').':') !!}
    {!! Form::number('pst_codigo_operadora', null, ['class' => 'form-control']) !!}
</div>

<!-- Pst Complemento Callerid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pst_complemento_callerid', __('models/terminacao.fields.pst_complemento_callerid').':') !!}
    {!! Form::text('pst_complemento_callerid', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('terminacaos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

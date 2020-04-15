<!-- Username Field -->
<div class="form-group col-sm-6">
    {!! Form::label('username', __('models/users.fields.username').':') !!}
    {!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-6">
    {!! Form::label('password', __('models/users.fields.password').':') !!}
    {!! Form::password('password', ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/users.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- End1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end1', __('models/users.fields.end1').':') !!}
    {!! Form::text('end1', null, ['class' => 'form-control']) !!}
</div>

<!-- End2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end2', __('models/users.fields.end2').':') !!}
    {!! Form::text('end2', null, ['class' => 'form-control']) !!}
</div>

<!-- Cep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cep', __('models/users.fields.cep').':') !!}
    {!! Form::text('cep', null, ['class' => 'form-control']) !!}
</div>

<!-- Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cidade', __('models/users.fields.cidade').':') !!}
    {!! Form::text('cidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bairro', __('models/users.fields.bairro').':') !!}
    {!! Form::text('bairro', null, ['class' => 'form-control']) !!}
</div>

<!-- Pais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pais', __('models/users.fields.pais').':') !!}
    {!! Form::text('pais', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo', __('models/users.fields.tipo').':') !!}
    {!! Form::number('tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Ddd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ddd', __('models/users.fields.ddd').':') !!}
    {!! Form::text('ddd', null, ['class' => 'form-control']) !!}
</div>

<!-- Fone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fone', __('models/users.fields.fone').':') !!}
    {!! Form::text('fone', null, ['class' => 'form-control']) !!}
</div>

<!-- Sipddd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sipddd', __('models/users.fields.sipddd').':') !!}
    {!! Form::text('sipddd', null, ['class' => 'form-control']) !!}
</div>

<!-- Sipfone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sipfone', __('models/users.fields.sipfone').':') !!}
    {!! Form::text('sipfone', null, ['class' => 'form-control']) !!}
</div>

<!-- Voicemail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('voicemail', __('models/users.fields.voicemail').':') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('voicemail', 0) !!}
        {!! Form::checkbox('voicemail', '1', null) !!} 1
    </label>
</div>

<!-- Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email', __('models/users.fields.email').':') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

<!-- Softphone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('softphone', __('models/users.fields.softphone').':') !!}
    {!! Form::text('softphone', null, ['class' => 'form-control']) !!}
</div>

<!-- Datacadastro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('datacadastro', __('models/users.fields.datacadastro').':') !!}
    {!! Form::text('datacadastro', null, ['class' => 'form-control','id'=>'datacadastro']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#datacadastro').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Horacadastro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('horacadastro', __('models/users.fields.horacadastro').':') !!}
    {!! Form::text('horacadastro', null, ['class' => 'form-control']) !!}
</div>

<!-- Atualizado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('atualizado', __('models/users.fields.atualizado').':') !!}
    {!! Form::text('atualizado', null, ['class' => 'form-control']) !!}
</div>

<!-- Empresa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('empresa', __('models/users.fields.empresa').':') !!}
    {!! Form::text('empresa', null, ['class' => 'form-control']) !!}
</div>

<!-- Ramoatividade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ramoatividade', __('models/users.fields.ramoatividade').':') !!}
    {!! Form::text('ramoatividade', null, ['class' => 'form-control']) !!}
</div>

<!-- Mostrar Lista Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mostrar_lista', __('models/users.fields.mostrar_lista').':') !!}
    {!! Form::text('mostrar_lista', null, ['class' => 'form-control']) !!}
</div>

<!-- Mostrar Ativo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mostrar_ativo', __('models/users.fields.mostrar_ativo').':') !!}
    {!! Form::text('mostrar_ativo', null, ['class' => 'form-control']) !!}
</div>

<!-- Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('estado', __('models/users.fields.estado').':') !!}
    {!! Form::text('estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', __('models/users.fields.status').':') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('status', 0) !!}
        {!! Form::checkbox('status', '1', null) !!} 1
    </label>
</div>

<!-- Qtdeemail Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qtdeemail', __('models/users.fields.qtdeemail').':') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('qtdeemail', 0) !!}
        {!! Form::checkbox('qtdeemail', '1', null) !!} 1
    </label>
</div>

<!-- Dtnewsletter Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dtnewsletter', __('models/users.fields.dtnewsletter').':') !!}
    {!! Form::text('dtnewsletter', null, ['class' => 'form-control','id'=>'dtnewsletter']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dtnewsletter').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Ip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ip', __('models/users.fields.ip').':') !!}
    {!! Form::text('ip', null, ['class' => 'form-control']) !!}
</div>

<!-- Dtultonline Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dtultonline', __('models/users.fields.dtultonline').':') !!}
    {!! Form::text('dtultonline', null, ['class' => 'form-control','id'=>'dtultonline']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dtultonline').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Convencional Field -->
<div class="form-group col-sm-6">
    {!! Form::label('convencional', __('models/users.fields.convencional').':') !!}
    {!! Form::text('convencional', null, ['class' => 'form-control']) !!}
</div>

<!-- Foto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('foto', __('models/users.fields.foto').':') !!}
    {!! Form::text('foto', null, ['class' => 'form-control']) !!}
</div>

<!-- Extensao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('extensao', __('models/users.fields.extensao').':') !!}
    {!! Form::text('extensao', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone1', __('models/users.fields.telefone1').':') !!}
    {!! Form::text('telefone1', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone2', __('models/users.fields.telefone2').':') !!}
    {!! Form::text('telefone2', null, ['class' => 'form-control']) !!}
</div>

<!-- Telefone3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('telefone3', __('models/users.fields.telefone3').':') !!}
    {!! Form::text('telefone3', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax', __('models/users.fields.fax').':') !!}
    {!! Form::text('fax', null, ['class' => 'form-control']) !!}
</div>

<!-- Tp Pessoa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tp_pessoa', __('models/users.fields.tp_pessoa').':') !!}
    {!! Form::text('tp_pessoa', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnpj Cpf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnpj_cpf', __('models/users.fields.cnpj_cpf').':') !!}
    {!! Form::text('cnpj_cpf', null, ['class' => 'form-control']) !!}
</div>

<!-- Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('representante_id', __('models/users.fields.representante_id').':') !!}
    {!! Form::number('representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Percacrescimo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('percacrescimo', __('models/users.fields.percacrescimo').':') !!}
    {!! Form::number('percacrescimo', null, ['class' => 'form-control']) !!}
</div>

<!-- Mudasenha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mudasenha', __('models/users.fields.mudasenha').':') !!}
    {!! Form::text('mudasenha', null, ['class' => 'form-control']) !!}
</div>

<!-- Server1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('server1', __('models/users.fields.server1').':') !!}
    {!! Form::text('server1', null, ['class' => 'form-control']) !!}
</div>

<!-- Server2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('server2', __('models/users.fields.server2').':') !!}
    {!! Form::text('server2', null, ['class' => 'form-control']) !!}
</div>

<!-- Server3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('server3', __('models/users.fields.server3').':') !!}
    {!! Form::text('server3', null, ['class' => 'form-control','id'=>'server3']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#server3').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Tempos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tempos', __('models/users.fields.tempos').':') !!}
    {!! Form::text('tempos', null, ['class' => 'form-control']) !!}
</div>

<!-- Pode Atualizar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pode_atualizar', __('models/users.fields.pode_atualizar').':') !!}
    {!! Form::text('pode_atualizar', null, ['class' => 'form-control']) !!}
</div>

<!-- Aparelho Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aparelho_id', __('models/users.fields.aparelho_id').':') !!}
    {!! Form::number('aparelho_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Login Agente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('login_agente', __('models/users.fields.login_agente').':') !!}
    {!! Form::text('login_agente', null, ['class' => 'form-control']) !!}
</div>

<!-- Avisar Fimcreditos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('avisar_fimcreditos', __('models/users.fields.avisar_fimcreditos').':') !!}
    {!! Form::text('avisar_fimcreditos', null, ['class' => 'form-control']) !!}
</div>

<!-- Login Grupo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('login_grupo', __('models/users.fields.login_grupo').':') !!}
    {!! Form::text('login_grupo', null, ['class' => 'form-control']) !!}
</div>

<!-- Prepos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prepos', __('models/users.fields.prepos').':') !!}
    {!! Form::text('prepos', null, ['class' => 'form-control']) !!}
</div>

<!-- Plano Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('plano_id', __('models/users.fields.plano_id').':') !!}
    {!! Form::number('plano_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Senha Painel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('senha_painel', __('models/users.fields.senha_painel').':') !!}
    {!! Form::text('senha_painel', null, ['class' => 'form-control']) !!}
</div>

<!-- Vlr Fixo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vlr_fixo', __('models/users.fields.vlr_fixo').':') !!}
    {!! Form::number('vlr_fixo', null, ['class' => 'form-control']) !!}
</div>

<!-- Vlr Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vlr_celular', __('models/users.fields.vlr_celular').':') !!}
    {!! Form::number('vlr_celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Liberar Fixo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('liberar_fixo', __('models/users.fields.liberar_fixo').':') !!}
    {!! Form::text('liberar_fixo', null, ['class' => 'form-control']) !!}
</div>

<!-- Liberar Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('liberar_celular', __('models/users.fields.liberar_celular').':') !!}
    {!! Form::text('liberar_celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Ligacoes Simultaneas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ligacoes_simultaneas', __('models/users.fields.ligacoes_simultaneas').':') !!}
    {!! Form::number('ligacoes_simultaneas', null, ['class' => 'form-control']) !!}
</div>

<!-- Pode Mudar Senha Ata Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pode_mudar_senha_ata', __('models/users.fields.pode_mudar_senha_ata').':') !!}
    {!! Form::text('pode_mudar_senha_ata', null, ['class' => 'form-control']) !!}
</div>

<!-- Protocolo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('protocolo', __('models/users.fields.protocolo').':') !!}
    {!! Form::text('protocolo', null, ['class' => 'form-control']) !!}
</div>

<!-- Master Field -->
<div class="form-group col-sm-6">
    {!! Form::label('master', __('models/users.fields.master').':') !!}
    {!! Form::text('master', null, ['class' => 'form-control']) !!}
</div>

<!-- Alias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alias', __('models/users.fields.alias').':') !!}
    {!! Form::text('alias', null, ['class' => 'form-control']) !!}
</div>

<!-- Email2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('email2', __('models/users.fields.email2').':') !!}
    {!! Form::text('email2', null, ['class' => 'form-control']) !!}
</div>

<!-- Voiptovoip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('voiptovoip', __('models/users.fields.voiptovoip').':') !!}
    {!! Form::text('voiptovoip', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Voiptovoip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_voiptovoip', __('models/users.fields.valor_voiptovoip').':') !!}
    {!! Form::number('valor_voiptovoip', null, ['class' => 'form-control']) !!}
</div>

<!-- Linguagem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('linguagem', __('models/users.fields.linguagem').':') !!}
    {!! Form::text('linguagem', null, ['class' => 'form-control']) !!}
</div>

<!-- Tabelaespecial Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tabelaespecial_id', __('models/users.fields.tabelaespecial_id').':') !!}
    {!! Form::number('tabelaespecial_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Vlr Mensalidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vlr_mensalidade', __('models/users.fields.vlr_mensalidade').':') !!}
    {!! Form::number('vlr_mensalidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Dia Cobrar Mensalidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dia_cobrar_mensalidade', __('models/users.fields.dia_cobrar_mensalidade').':') !!}
    {!! Form::number('dia_cobrar_mensalidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Vlr Avisar Fim Cred Field -->
<div class="form-group col-sm-6">
    {!! Form::label('vlr_avisar_fim_cred', __('models/users.fields.vlr_avisar_fim_cred').':') !!}
    {!! Form::number('vlr_avisar_fim_cred', null, ['class' => 'form-control']) !!}
</div>

<!-- Liberar Ddi Field -->
<div class="form-group col-sm-6">
    {!! Form::label('liberar_ddi', __('models/users.fields.liberar_ddi').':') !!}
    {!! Form::text('liberar_ddi', null, ['class' => 'form-control']) !!}
</div>

<!-- Limitar Voiptovoip Vlr Field -->
<div class="form-group col-sm-6">
    {!! Form::label('limitar_voiptovoip_vlr', __('models/users.fields.limitar_voiptovoip_vlr').':') !!}
    {!! Form::text('limitar_voiptovoip_vlr', null, ['class' => 'form-control']) !!}
</div>

<!-- Creditos Vencem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('creditos_vencem', __('models/users.fields.creditos_vencem').':') !!}
    {!! Form::text('creditos_vencem', null, ['class' => 'form-control']) !!}
</div>

<!-- Dt Vencer Creditos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dt_vencer_creditos', __('models/users.fields.dt_vencer_creditos').':') !!}
    {!! Form::text('dt_vencer_creditos', null, ['class' => 'form-control','id'=>'dt_vencer_creditos']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dt_vencer_creditos').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Ligar Semddd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ligar_semddd', __('models/users.fields.ligar_semddd').':') !!}
    {!! Form::text('ligar_semddd', null, ['class' => 'form-control']) !!}
</div>

<!-- Tempo Maximo Ligacoes Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tempo_maximo_ligacoes', __('models/users.fields.tempo_maximo_ligacoes').':') !!}
    {!! Form::number('tempo_maximo_ligacoes', null, ['class' => 'form-control']) !!}
</div>

<!-- Siga Me Field -->
<div class="form-group col-sm-6">
    {!! Form::label('siga_me', __('models/users.fields.siga_me').':') !!}
    {!! Form::text('siga_me', null, ['class' => 'form-control']) !!}
</div>

<!-- Dialplain Qtdeliminar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dialplain_qtdeliminar', __('models/users.fields.dialplain_qtdeliminar').':') !!}
    {!! Form::number('dialplain_qtdeliminar', null, ['class' => 'form-control']) !!}
</div>

<!-- Dialplain Adicionar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dialplain_adicionar', __('models/users.fields.dialplain_adicionar').':') !!}
    {!! Form::text('dialplain_adicionar', null, ['class' => 'form-control']) !!}
</div>

<!-- Pin Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pin_number', __('models/users.fields.pin_number').':') !!}
    {!! Form::number('pin_number', null, ['class' => 'form-control']) !!}
</div>

<!-- User Cabine Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_cabine', __('models/users.fields.user_cabine').':') !!}
    {!! Form::text('user_cabine', null, ['class' => 'form-control']) !!}
</div>

<!-- Id Cabine Field -->
<div class="form-group col-sm-6">
    {!! Form::label('id_cabine', __('models/users.fields.id_cabine').':') !!}
    {!! Form::number('id_cabine', null, ['class' => 'form-control']) !!}
</div>

<!-- Mac Address Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mac_address', __('models/users.fields.mac_address').':') !!}
    {!! Form::text('mac_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Tp Tarifacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tp_tarifacao', __('models/users.fields.tp_tarifacao').':') !!}
    {!! Form::text('tp_tarifacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Nrserie Ata Field -->
<div class="form-group col-sm-6">
    {!! Form::label('nrserie_ata', __('models/users.fields.nrserie_ata').':') !!}
    {!! Form::text('nrserie_ata', null, ['class' => 'form-control']) !!}
</div>

<!-- Gravar Chamadas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gravar_chamadas', __('models/users.fields.gravar_chamadas').':') !!}
    {!! Form::text('gravar_chamadas', null, ['class' => 'form-control']) !!}
</div>

<!-- Assinante Indicador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('assinante_indicador', __('models/users.fields.assinante_indicador').':') !!}
    {!! Form::text('assinante_indicador', null, ['class' => 'form-control']) !!}
</div>

<!-- Comissao Indicador Field -->
<div class="form-group col-sm-6">
    {!! Form::label('comissao_indicador', __('models/users.fields.comissao_indicador').':') !!}
    {!! Form::number('comissao_indicador', null, ['class' => 'form-control']) !!}
</div>

<!-- Mostrar Valores Field -->
<div class="form-group col-sm-6">
    {!! Form::label('mostrar_valores', __('models/users.fields.mostrar_valores').':') !!}
    {!! Form::text('mostrar_valores', null, ['class' => 'form-control']) !!}
</div>

<!-- Tp Protocolo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tp_protocolo', __('models/users.fields.tp_protocolo').':') !!}
    {!! Form::text('tp_protocolo', null, ['class' => 'form-control']) !!}
</div>

<!-- Taxa Conexao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('taxa_conexao', __('models/users.fields.taxa_conexao').':') !!}
    {!! Form::number('taxa_conexao', null, ['class' => 'form-control']) !!}
</div>

<!-- Taxa Desconexao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('taxa_desconexao', __('models/users.fields.taxa_desconexao').':') !!}
    {!! Form::number('taxa_desconexao', null, ['class' => 'form-control']) !!}
</div>

<!-- Retornar Callingcard Field -->
<div class="form-group col-sm-6">
    {!! Form::label('retornar_callingcard', __('models/users.fields.retornar_callingcard').':') !!}
    {!! Form::text('retornar_callingcard', null, ['class' => 'form-control']) !!}
</div>

<!-- Ligacao Callback Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ligacao_callback', __('models/users.fields.ligacao_callback').':') !!}
    {!! Form::text('ligacao_callback', null, ['class' => 'form-control']) !!}
</div>

<!-- Sgs Comecar Cobrar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sgs_comecar_cobrar', __('models/users.fields.sgs_comecar_cobrar').':') !!}
    {!! Form::number('sgs_comecar_cobrar', null, ['class' => 'form-control']) !!}
</div>

<!-- Sgs Comecar Cobrar Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sgs_comecar_cobrar_celular', __('models/users.fields.sgs_comecar_cobrar_celular').':') !!}
    {!! Form::number('sgs_comecar_cobrar_celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Ddd A Bloquear Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ddd_a_bloquear', __('models/users.fields.ddd_a_bloquear').':') !!}
    {!! Form::text('ddd_a_bloquear', null, ['class' => 'form-control']) !!}
</div>

<!-- Bloquear Fixo Celular Todas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bloquear_fixo_celular_todas', __('models/users.fields.bloquear_fixo_celular_todas').':') !!}
    {!! Form::text('bloquear_fixo_celular_todas', null, ['class' => 'form-control']) !!}
</div>

<!-- Gruposvoip Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gruposvoip_id', __('models/users.fields.gruposvoip_id').':') !!}
    {!! Form::number('gruposvoip_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Dt Ult Reducao Simultaneas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dt_ult_reducao_simultaneas', __('models/users.fields.dt_ult_reducao_simultaneas').':') !!}
    {!! Form::text('dt_ult_reducao_simultaneas', null, ['class' => 'form-control','id'=>'dt_ult_reducao_simultaneas']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dt_ult_reducao_simultaneas').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Qualify Field -->
<div class="form-group col-sm-6">
    {!! Form::label('qualify', __('models/users.fields.qualify').':') !!}
    {!! Form::text('qualify', null, ['class' => 'form-control']) !!}
</div>

<!-- Tech Prefix Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tech_prefix', __('models/users.fields.tech_prefix').':') !!}
    {!! Form::number('tech_prefix', null, ['class' => 'form-control']) !!}
</div>

<!-- Dialplain Diferenciado Inter Eliminar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dialplain_diferenciado_inter_eliminar', __('models/users.fields.dialplain_diferenciado_inter_eliminar').':') !!}
    {!! Form::number('dialplain_diferenciado_inter_eliminar', null, ['class' => 'form-control']) !!}
</div>

<!-- Usa 4003 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usa_4003', __('models/users.fields.usa_4003').':') !!}
    {!! Form::text('usa_4003', null, ['class' => 'form-control']) !!}
</div>

<!-- Venda 4003 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('venda_4003', __('models/users.fields.venda_4003').':') !!}
    {!! Form::number('venda_4003', null, ['class' => 'form-control']) !!}
</div>

<!-- Venda 0800 Fixo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('venda_0800_fixo', __('models/users.fields.venda_0800_fixo').':') !!}
    {!! Form::number('venda_0800_fixo', null, ['class' => 'form-control']) !!}
</div>

<!-- Venda 0800 Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('venda_0800_celular', __('models/users.fields.venda_0800_celular').':') !!}
    {!! Form::number('venda_0800_celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Socobrar 4003 Secompletar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('socobrar_4003_secompletar', __('models/users.fields.socobrar_4003_secompletar').':') !!}
    {!! Form::text('socobrar_4003_secompletar', null, ['class' => 'form-control']) !!}
</div>

<!-- Cobrar 4003 Emumatarifaso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cobrar_4003_emumatarifaso', __('models/users.fields.cobrar_4003_emumatarifaso').':') !!}
    {!! Form::text('cobrar_4003_emumatarifaso', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Lig Permitidas 4003 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_lig_permitidas_4003', __('models/users.fields.tipo_lig_permitidas_4003').':') !!}
    {!! Form::text('tipo_lig_permitidas_4003', null, ['class' => 'form-control']) !!}
</div>

<!-- Tp Tarifacao 4003 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tp_tarifacao_4003', __('models/users.fields.tp_tarifacao_4003').':') !!}
    {!! Form::text('tp_tarifacao_4003', null, ['class' => 'form-control']) !!}
</div>

<!-- Usa Sms Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usa_sms', __('models/users.fields.usa_sms').':') !!}
    {!! Form::text('usa_sms', null, ['class' => 'form-control']) !!}
</div>

<!-- Venda Sms Field -->
<div class="form-group col-sm-6">
    {!! Form::label('venda_sms', __('models/users.fields.venda_sms').':') !!}
    {!! Form::number('venda_sms', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Terminacao Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_terminacao_id', __('models/users.fields.usr_terminacao_id').':') !!}
    {!! Form::number('usr_terminacao_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Terminacao2 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_terminacao2_id', __('models/users.fields.usr_terminacao2_id').':') !!}
    {!! Form::number('usr_terminacao2_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Terminacao3 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_terminacao3_id', __('models/users.fields.usr_terminacao3_id').':') !!}
    {!! Form::number('usr_terminacao3_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Terminacao Cel Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_terminacao_cel_id', __('models/users.fields.usr_terminacao_cel_id').':') !!}
    {!! Form::number('usr_terminacao_cel_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Terminacao2 Cel Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_terminacao2_cel_id', __('models/users.fields.usr_terminacao2_cel_id').':') !!}
    {!! Form::number('usr_terminacao2_cel_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Terminacao3 Cel Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_terminacao3_cel_id', __('models/users.fields.usr_terminacao3_cel_id').':') !!}
    {!! Form::number('usr_terminacao3_cel_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Terminacao Int Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_terminacao_int_id', __('models/users.fields.usr_terminacao_int_id').':') !!}
    {!! Form::number('usr_terminacao_int_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Terminacao2 Int Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_terminacao2_int_id', __('models/users.fields.usr_terminacao2_int_id').':') !!}
    {!! Form::number('usr_terminacao2_int_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Terminacao3 Int Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_terminacao3_int_id', __('models/users.fields.usr_terminacao3_int_id').':') !!}
    {!! Form::number('usr_terminacao3_int_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Falar Saldo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('falar_saldo', __('models/users.fields.falar_saldo').':') !!}
    {!! Form::text('falar_saldo', null, ['class' => 'form-control']) !!}
</div>

<!-- Tipo Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_cliente', __('models/users.fields.tipo_cliente').':') !!}
    {!! Form::text('tipo_cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Valor Contacorrente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('valor_contacorrente', __('models/users.fields.valor_contacorrente').':') !!}
    {!! Form::number('valor_contacorrente', null, ['class' => 'form-control']) !!}
</div>

<!-- Pode Ficar Negativo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pode_ficar_negativo', __('models/users.fields.pode_ficar_negativo').':') !!}
    {!! Form::text('pode_ficar_negativo', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Observacoes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('usr_observacoes', __('models/users.fields.usr_observacoes').':') !!}
    {!! Form::textarea('usr_observacoes', null, ['class' => 'form-control']) !!}
</div>
@push('scripts')
    <script type="text/javascript">
        CKEDITOR.replace('usr_observacoes', {
          language: '{{ strtolower(config('app.locale')) }}',
          height: '150px',
        })
    </script>
@endpush


<!-- Enviar Calerid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('enviar_calerid', __('models/users.fields.enviar_calerid').':') !!}
    {!! Form::text('enviar_calerid', null, ['class' => 'form-control']) !!}
</div>

<!-- Limite Ficar Negativo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('limite_ficar_negativo', __('models/users.fields.limite_ficar_negativo').':') !!}
    {!! Form::number('limite_ficar_negativo', null, ['class' => 'form-control']) !!}
</div>

<!-- Pode Transferir Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pode_transferir', __('models/users.fields.pode_transferir').':') !!}
    {!! Form::text('pode_transferir', null, ['class' => 'form-control']) !!}
</div>

<!-- Reinvite Audio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('reinvite_audio', __('models/users.fields.reinvite_audio').':') !!}
    {!! Form::text('reinvite_audio', null, ['class' => 'form-control']) !!}
</div>

<!-- Taxa Conexao Segundos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('taxa_conexao_segundos', __('models/users.fields.taxa_conexao_segundos').':') !!}
    {!! Form::number('taxa_conexao_segundos', null, ['class' => 'form-control']) !!}
</div>

<!-- Taxa Desconexao Segundos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('taxa_desconexao_segundos', __('models/users.fields.taxa_desconexao_segundos').':') !!}
    {!! Form::number('taxa_desconexao_segundos', null, ['class' => 'form-control']) !!}
</div>

<!-- Tabelaespecial Callingcard Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tabelaespecial_callingcard_id', __('models/users.fields.tabelaespecial_callingcard_id').':') !!}
    {!! Form::number('tabelaespecial_callingcard_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Portabilidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('portabilidade', __('models/users.fields.portabilidade').':') !!}
    {!! Form::text('portabilidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Codigo Rn Liberado Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('codigo_rn_liberado', __('models/users.fields.codigo_rn_liberado').':') !!}
    {!! Form::textarea('codigo_rn_liberado', null, ['class' => 'form-control']) !!}
</div>
@push('scripts')
    <script type="text/javascript">
        CKEDITOR.replace('codigo_rn_liberado', {
          language: '{{ strtolower(config('app.locale')) }}',
          height: '150px',
        })
    </script>
@endpush


<!-- Tipo Restricao Ligacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tipo_restricao_ligacao', __('models/users.fields.tipo_restricao_ligacao').':') !!}
    {!! Form::number('tipo_restricao_ligacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Telegram Token Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_telegram_token', __('models/users.fields.usr_telegram_token').':') !!}
    {!! Form::text('usr_telegram_token', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Mostra Revenda Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_mostra_revenda', __('models/users.fields.usr_mostra_revenda').':') !!}
    {!! Form::text('usr_mostra_revenda', null, ['class' => 'form-control']) !!}
</div>

<!-- Acessoippainel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('acessoippainel', __('models/users.fields.acessoippainel').':') !!}
    {!! Form::text('acessoippainel', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('assinantes.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

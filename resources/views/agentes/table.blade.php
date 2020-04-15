<div class="table-responsive">
    <table class="table" id="agentes-table">
        <thead>
            <tr>
                <th>@lang('models/agentes.fields.age_nome')</th>
        <th>@lang('models/agentes.fields.age_login')</th>
        <th>@lang('models/agentes.fields.age_senha')</th>
        <th>@lang('models/agentes.fields.age_comissao')</th>
        <th>@lang('models/agentes.fields.age_endereco')</th>
        <th>@lang('models/agentes.fields.age_bairro')</th>
        <th>@lang('models/agentes.fields.age_cidade')</th>
        <th>@lang('models/agentes.fields.age_estado')</th>
        <th>@lang('models/agentes.fields.age_cep')</th>
        <th>@lang('models/agentes.fields.age_email')</th>
        <th>@lang('models/agentes.fields.age_status')</th>
        <th>@lang('models/agentes.fields.age_data')</th>
        <th>@lang('models/agentes.fields.age_telefone1')</th>
        <th>@lang('models/agentes.fields.age_telefone2')</th>
        <th>@lang('models/agentes.fields.age_celular')</th>
        <th>@lang('models/agentes.fields.age_mudasenha')</th>
        <th>@lang('models/agentes.fields.age_representante_id')</th>
        <th>@lang('models/agentes.fields.age_linguagem')</th>
        <th>@lang('models/agentes.fields.age_incluir_users')</th>
        <th>@lang('models/agentes.fields.age_alterar_users')</th>
        <th>@lang('models/agentes.fields.age_acesso_cabines')</th>
        <th>@lang('models/agentes.fields.age_acesso_creditos')</th>
        <th>@lang('models/agentes.fields.age_tabelaespecial_id')</th>
        <th>@lang('models/agentes.fields.age_percacrescimo')</th>
        <th>@lang('models/agentes.fields.age_saldoreal')</th>
        <th>@lang('models/agentes.fields.age_atualizado')</th>
        <th>@lang('models/agentes.fields.age_tptarifacao')</th>
        <th>@lang('models/agentes.fields.age_com_ident_nome')</th>
        <th>@lang('models/agentes.fields.age_ligacoes_emcurso')</th>
        <th>@lang('models/agentes.fields.age_liberar_inicializar')</th>
        <th>@lang('models/agentes.fields.age_controle_lastro')</th>
        <th>@lang('models/agentes.fields.age_qtde_colunas')</th>
        <th>@lang('models/agentes.fields.age_como_revenda')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($agentes as $agente)
            <tr>
                <td>{{ $agente->age_nome }}</td>
            <td>{{ $agente->age_login }}</td>
            <td>{{ $agente->age_senha }}</td>
            <td>{{ $agente->age_comissao }}</td>
            <td>{{ $agente->age_endereco }}</td>
            <td>{{ $agente->age_bairro }}</td>
            <td>{{ $agente->age_cidade }}</td>
            <td>{{ $agente->age_estado }}</td>
            <td>{{ $agente->age_cep }}</td>
            <td>{{ $agente->age_email }}</td>
            <td>{{ $agente->age_status }}</td>
            <td>{{ $agente->age_data }}</td>
            <td>{{ $agente->age_telefone1 }}</td>
            <td>{{ $agente->age_telefone2 }}</td>
            <td>{{ $agente->age_celular }}</td>
            <td>{{ $agente->age_mudasenha }}</td>
            <td>{{ $agente->age_representante_id }}</td>
            <td>{{ $agente->age_linguagem }}</td>
            <td>{{ $agente->age_incluir_users }}</td>
            <td>{{ $agente->age_alterar_users }}</td>
            <td>{{ $agente->age_acesso_cabines }}</td>
            <td>{{ $agente->age_acesso_creditos }}</td>
            <td>{{ $agente->age_tabelaespecial_id }}</td>
            <td>{{ $agente->age_percacrescimo }}</td>
            <td>{{ $agente->age_saldoreal }}</td>
            <td>{{ $agente->age_atualizado }}</td>
            <td>{{ $agente->age_tptarifacao }}</td>
            <td>{{ $agente->age_com_ident_nome }}</td>
            <td>{{ $agente->age_ligacoes_emcurso }}</td>
            <td>{{ $agente->age_liberar_inicializar }}</td>
            <td>{{ $agente->age_controle_lastro }}</td>
            <td>{{ $agente->age_qtde_colunas }}</td>
            <td>{{ $agente->age_como_revenda }}</td>
                <td>
                    {!! Form::open(['route' => ['agentes.destroy', $agente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('agentes.show', [$agente->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('agentes.edit', [$agente->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="table-responsive">
    <table class="table" id="smsCampanhas-table">
        <thead>
            <tr>
                <th>@lang('models/smscampanha.fields.smsc_descricao')</th>
        <th>@lang('models/smscampanha.fields.smsc_status')</th>
        <th>@lang('models/smscampanha.fields.smsc_data_ini')</th>
        <th>@lang('models/smscampanha.fields.smsc_hora_ini')</th>
        <th>@lang('models/smscampanha.fields.smsc_terminacao_id')</th>
        <th>@lang('models/smscampanha.fields.smsc_fornecedor_id')</th>
        <th>@lang('models/smscampanha.fields.smsc_login')</th>
        <th>@lang('models/smscampanha.fields.smsc_maxretries')</th>
        <th>@lang('models/smscampanha.fields.smsc_retrytime')</th>
        <th>@lang('models/smscampanha.fields.smsc_waittime')</th>
        <th>@lang('models/smscampanha.fields.smsc_reinclusao_automatica')</th>
        <th>@lang('models/smscampanha.fields.smsc_representante_id')</th>
        <th>@lang('models/smscampanha.fields.smsc_hora_parar')</th>
        <th>@lang('models/smscampanha.fields.smsc_qtd_simult_noite')</th>
        <th>@lang('models/smscampanha.fields.smsc_qtd_simult_dia')</th>
        <th>@lang('models/smscampanha.fields.smsc_data_encerrar')</th>
        <th>@lang('models/smscampanha.fields.smsc_bloqueia_procon')</th>
        <th>@lang('models/smscampanha.fields.smsc_intervalo_envio')</th>
        <th>@lang('models/smscampanha.fields.smsc_volume_envio_por_intervalo')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($smsCampanhas as $smsCampanha)
            <tr>
                <td>{{ $smsCampanha->smsc_descricao }}</td>
            <td>{{ $smsCampanha->smsc_status }}</td>
            <td>{{ $smsCampanha->smsc_data_ini }}</td>
            <td>{{ $smsCampanha->smsc_hora_ini }}</td>
            <td>{{ $smsCampanha->smsc_terminacao_id }}</td>
            <td>{{ $smsCampanha->smsc_fornecedor_id }}</td>
            <td>{{ $smsCampanha->smsc_login }}</td>
            <td>{{ $smsCampanha->smsc_maxretries }}</td>
            <td>{{ $smsCampanha->smsc_retrytime }}</td>
            <td>{{ $smsCampanha->smsc_waittime }}</td>
            <td>{{ $smsCampanha->smsc_reinclusao_automatica }}</td>
            <td>{{ $smsCampanha->smsc_representante_id }}</td>
            <td>{{ $smsCampanha->smsc_hora_parar }}</td>
            <td>{{ $smsCampanha->smsc_qtd_simult_noite }}</td>
            <td>{{ $smsCampanha->smsc_qtd_simult_dia }}</td>
            <td>{{ $smsCampanha->smsc_data_encerrar }}</td>
            <td>{{ $smsCampanha->smsc_bloqueia_procon }}</td>
            <td>{{ $smsCampanha->smsc_intervalo_envio }}</td>
            <td>{{ $smsCampanha->smsc_volume_envio_por_intervalo }}</td>
                <td>
                    {!! Form::open(['route' => ['smsCampanhas.destroy', $smsCampanha->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('smsCampanhas.show', [$smsCampanha->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('smsCampanhas.edit', [$smsCampanha->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

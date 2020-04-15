<div class="table-responsive">
    <table class="table" id="contratacaos-table">
        <thead>
            <tr>
                <th>@lang('models/contratacao.fields.cnt_assinante_id')</th>
        <th>@lang('models/contratacao.fields.cnt_data')</th>
        <th>@lang('models/contratacao.fields.cnt_hora')</th>
        <th>@lang('models/contratacao.fields.cnt_valor')</th>
        <th>@lang('models/contratacao.fields.cnt_status')</th>
        <th>@lang('models/contratacao.fields.cnt_dataliberou')</th>
        <th>@lang('models/contratacao.fields.cnt_tipo')</th>
        <th>@lang('models/contratacao.fields.cnt_historico')</th>
        <th>@lang('models/contratacao.fields.cnt_boleto')</th>
        <th>@lang('models/contratacao.fields.cnt_agente_id')</th>
        <th>@lang('models/contratacao.fields.cnt_saldo_repres')</th>
        <th>@lang('models/contratacao.fields.cnt_percentual_rev')</th>
        <th>@lang('models/contratacao.fields.cnt_percentual_assin')</th>
        <th>@lang('models/contratacao.fields.cnt_saldo_assin_ant')</th>
        <th>@lang('models/contratacao.fields.cnt_saldo_rev_ant')</th>
        <th>@lang('models/contratacao.fields.cnt_comprovacao')</th>
        <th>@lang('models/contratacao.fields.cnt_estorno_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contratacaos as $contratacao)
            <tr>
                <td>{{ $contratacao->cnt_assinante_id }}</td>
            <td>{{ $contratacao->cnt_data }}</td>
            <td>{{ $contratacao->cnt_hora }}</td>
            <td>{{ $contratacao->cnt_valor }}</td>
            <td>{{ $contratacao->cnt_status }}</td>
            <td>{{ $contratacao->cnt_dataliberou }}</td>
            <td>{{ $contratacao->cnt_tipo }}</td>
            <td>{{ $contratacao->cnt_historico }}</td>
            <td>{{ $contratacao->cnt_boleto }}</td>
            <td>{{ $contratacao->cnt_agente_id }}</td>
            <td>{{ $contratacao->cnt_saldo_repres }}</td>
            <td>{{ $contratacao->cnt_percentual_rev }}</td>
            <td>{{ $contratacao->cnt_percentual_assin }}</td>
            <td>{{ $contratacao->cnt_saldo_assin_ant }}</td>
            <td>{{ $contratacao->cnt_saldo_rev_ant }}</td>
            <td>{{ $contratacao->cnt_comprovacao }}</td>
            <td>{{ $contratacao->cnt_estorno_id }}</td>
                <td>
                    {!! Form::open(['route' => ['contratacaos.destroy', $contratacao->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('contratacaos.show', [$contratacao->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('contratacaos.edit', [$contratacao->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

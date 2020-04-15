<div class="table-responsive">
    <table class="table" id="ligacaos-table">
        <thead>
            <tr>
                <th>@lang('models/ligacoes.fields.lge_assinante')</th>
        <th>@lang('models/ligacoes.fields.lge_datainicio')</th>
        <th>@lang('models/ligacoes.fields.lge_datafim')</th>
        <th>@lang('models/ligacoes.fields.lge_segundos')</th>
        <th>@lang('models/ligacoes.fields.lge_fone_origem')</th>
        <th>@lang('models/ligacoes.fields.lge_valor')</th>
        <th>@lang('models/ligacoes.fields.lge_valor_agente')</th>
        <th>@lang('models/ligacoes.fields.lge_valor_repres')</th>
        <th>@lang('models/ligacoes.fields.lge_valor_master')</th>
        <th>@lang('models/ligacoes.fields.lge_representante_id')</th>
        <th>@lang('models/ligacoes.fields.lge_fornecedor_id')</th>
        <th>@lang('models/ligacoes.fields.lge_gvt_id')</th>
        <th>@lang('models/ligacoes.fields.lge_tptarifacao')</th>
        <th>@lang('models/ligacoes.fields.lge_status')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ligacaos as $ligacao)
            <tr>
                <td>{{ $ligacao->lge_assinante }}</td>
            <td>{{ $ligacao->lge_datainicio }}</td>
            <td>{{ $ligacao->lge_datafim }}</td>
            <td>{{ $ligacao->lge_segundos }}</td>
            <td>{{ $ligacao->lge_fone_origem }}</td>
            <td>{{ $ligacao->lge_valor }}</td>
            <td>{{ $ligacao->lge_valor_agente }}</td>
            <td>{{ $ligacao->lge_valor_repres }}</td>
            <td>{{ $ligacao->lge_valor_master }}</td>
            <td>{{ $ligacao->lge_representante_id }}</td>
            <td>{{ $ligacao->lge_fornecedor_id }}</td>
            <td>{{ $ligacao->lge_gvt_id }}</td>
            <td>{{ $ligacao->lge_tptarifacao }}</td>
            <td>{{ $ligacao->lge_status }}</td>
                <td>
                    {!! Form::open(['route' => ['ligacaos.destroy', $ligacao->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ligacaos.show', [$ligacao->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('ligacaos.edit', [$ligacao->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

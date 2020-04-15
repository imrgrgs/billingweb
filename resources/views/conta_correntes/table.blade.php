<div class="table-responsive">
    <table class="table" id="contaCorrentes-table">
        <thead>
            <tr>
                <th>@lang('models/contacorrente.fields.cco_data')</th>
        <th>@lang('models/contacorrente.fields.cco_hora')</th>
        <th>@lang('models/contacorrente.fields.cco_historico')</th>
        <th>@lang('models/contacorrente.fields.cco_valor')</th>
        <th>@lang('models/contacorrente.fields.cco_tipo')</th>
        <th>@lang('models/contacorrente.fields.cco_assinante')</th>
        <th>@lang('models/contacorrente.fields.cco_representante_id')</th>
        <th>@lang('models/contacorrente.fields.cco_fornecedor_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contaCorrentes as $contaCorrente)
            <tr>
                <td>{{ $contaCorrente->cco_data }}</td>
            <td>{{ $contaCorrente->cco_hora }}</td>
            <td>{{ $contaCorrente->cco_historico }}</td>
            <td>{{ $contaCorrente->cco_valor }}</td>
            <td>{{ $contaCorrente->cco_tipo }}</td>
            <td>{{ $contaCorrente->cco_assinante }}</td>
            <td>{{ $contaCorrente->cco_representante_id }}</td>
            <td>{{ $contaCorrente->cco_fornecedor_id }}</td>
                <td>
                    {!! Form::open(['route' => ['contaCorrentes.destroy', $contaCorrente->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('contaCorrentes.show', [$contaCorrente->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('contaCorrentes.edit', [$contaCorrente->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

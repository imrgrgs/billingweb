<div class="table-responsive">
    <table class="table" id="credito0800Cartaos-table">
        <thead>
            <tr>
                <th>@lang('models/creditos0800cartoes.fields.cr8_data')</th>
        <th>@lang('models/creditos0800cartoes.fields.cr8_hora')</th>
        <th>@lang('models/creditos0800cartoes.fields.cr8_valor')</th>
        <th>@lang('models/creditos0800cartoes.fields.cr8_tipo')</th>
        <th>@lang('models/creditos0800cartoes.fields.cr8_comprovacao')</th>
        <th>@lang('models/creditos0800cartoes.fields.cr8_fornecedor_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($credito0800Cartaos as $credito0800Cartao)
            <tr>
                <td>{{ $credito0800Cartao->cr8_data }}</td>
            <td>{{ $credito0800Cartao->cr8_hora }}</td>
            <td>{{ $credito0800Cartao->cr8_valor }}</td>
            <td>{{ $credito0800Cartao->cr8_tipo }}</td>
            <td>{{ $credito0800Cartao->cr8_comprovacao }}</td>
            <td>{{ $credito0800Cartao->cr8_fornecedor_id }}</td>
                <td>
                    {!! Form::open(['route' => ['credito0800Cartaos.destroy', $credito0800Cartao->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('credito0800Cartaos.show', [$credito0800Cartao->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('credito0800Cartaos.edit', [$credito0800Cartao->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

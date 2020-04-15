<div class="table-responsive">
    <table class="table" id="cpaMasters-table">
        <thead>
            <tr>
                <th>@lang('models/cpamaster.fields.cma_fornecedor_id')</th>
        <th>@lang('models/cpamaster.fields.cma_data')</th>
        <th>@lang('models/cpamaster.fields.cma_hora')</th>
        <th>@lang('models/cpamaster.fields.cma_valor')</th>
        <th>@lang('models/cpamaster.fields.cma_status')</th>
        <th>@lang('models/cpamaster.fields.cma_dataliberou')</th>
        <th>@lang('models/cpamaster.fields.cma_tipo')</th>
        <th>@lang('models/cpamaster.fields.cma_historico')</th>
        <th>@lang('models/cpamaster.fields.cma_boleto')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cpaMasters as $cpaMaster)
            <tr>
                <td>{{ $cpaMaster->cma_fornecedor_id }}</td>
            <td>{{ $cpaMaster->cma_data }}</td>
            <td>{{ $cpaMaster->cma_hora }}</td>
            <td>{{ $cpaMaster->cma_valor }}</td>
            <td>{{ $cpaMaster->cma_status }}</td>
            <td>{{ $cpaMaster->cma_dataliberou }}</td>
            <td>{{ $cpaMaster->cma_tipo }}</td>
            <td>{{ $cpaMaster->cma_historico }}</td>
            <td>{{ $cpaMaster->cma_boleto }}</td>
                <td>
                    {!! Form::open(['route' => ['cpaMasters.destroy', $cpaMaster->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cpaMasters.show', [$cpaMaster->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cpaMasters.edit', [$cpaMaster->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

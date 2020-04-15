<div class="table-responsive">
    <table class="table" id="cprasTermins-table">
        <thead>
            <tr>
                <th>@lang('models/cprastermin.fields.cpr_data')</th>
        <th>@lang('models/cprastermin.fields.cpr_hora')</th>
        <th>@lang('models/cprastermin.fields.cpr_historico')</th>
        <th>@lang('models/cprastermin.fields.cpr_valor')</th>
        <th>@lang('models/cprastermin.fields.cpr_operacao')</th>
        <th>@lang('models/cprastermin.fields.cpr_terminacao_id')</th>
        <th>@lang('models/cprastermin.fields.cpr_fornecedor_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cprasTermins as $cprasTermin)
            <tr>
                <td>{{ $cprasTermin->cpr_data }}</td>
            <td>{{ $cprasTermin->cpr_hora }}</td>
            <td>{{ $cprasTermin->cpr_historico }}</td>
            <td>{{ $cprasTermin->cpr_valor }}</td>
            <td>{{ $cprasTermin->cpr_operacao }}</td>
            <td>{{ $cprasTermin->cpr_terminacao_id }}</td>
            <td>{{ $cprasTermin->cpr_fornecedor_id }}</td>
                <td>
                    {!! Form::open(['route' => ['cprasTermins.destroy', $cprasTermin->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cprasTermins.show', [$cprasTermin->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cprasTermins.edit', [$cprasTermin->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="table-responsive">
    <table class="table" id="cacs-table">
        <thead>
            <tr>
                <th>@lang('models/cacs.fields.cac_cliente_id')</th>
        <th>@lang('models/cacs.fields.cac_data_abertura')</th>
        <th>@lang('models/cacs.fields.cac_hora_abertura')</th>
        <th>@lang('models/cacs.fields.cac_tipo')</th>
        <th>@lang('models/cacs.fields.cac_descricao')</th>
        <th>@lang('models/cacs.fields.cac_solucao')</th>
        <th>@lang('models/cacs.fields.cac_status')</th>
        <th>@lang('models/cacs.fields.cac_nomecontato')</th>
        <th>@lang('models/cacs.fields.cac_data_solucao')</th>
        <th>@lang('models/cacs.fields.cac_hora_solucao')</th>
        <th>@lang('models/cacs.fields.cac_login')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cacs as $cac)
            <tr>
                <td>{{ $cac->cac_cliente_id }}</td>
            <td>{{ $cac->cac_data_abertura }}</td>
            <td>{{ $cac->cac_hora_abertura }}</td>
            <td>{{ $cac->cac_tipo }}</td>
            <td>{{ $cac->cac_descricao }}</td>
            <td>{{ $cac->cac_solucao }}</td>
            <td>{{ $cac->cac_status }}</td>
            <td>{{ $cac->cac_nomecontato }}</td>
            <td>{{ $cac->cac_data_solucao }}</td>
            <td>{{ $cac->cac_hora_solucao }}</td>
            <td>{{ $cac->cac_login }}</td>
                <td>
                    {!! Form::open(['route' => ['cacs.destroy', $cac->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cacs.show', [$cac->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cacs.edit', [$cac->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

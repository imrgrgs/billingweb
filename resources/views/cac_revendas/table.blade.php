<div class="table-responsive">
    <table class="table" id="cacRevendas-table">
        <thead>
            <tr>
                <th>@lang('models/cacsrevenda.fields.cac_representante_id')</th>
        <th>@lang('models/cacsrevenda.fields.cac_data_abertura')</th>
        <th>@lang('models/cacsrevenda.fields.cac_hora_abertura')</th>
        <th>@lang('models/cacsrevenda.fields.cac_tipo')</th>
        <th>@lang('models/cacsrevenda.fields.cac_descricao')</th>
        <th>@lang('models/cacsrevenda.fields.cac_solucao')</th>
        <th>@lang('models/cacsrevenda.fields.cac_status')</th>
        <th>@lang('models/cacsrevenda.fields.cac_nomecontato')</th>
        <th>@lang('models/cacsrevenda.fields.cac_data_solucao')</th>
        <th>@lang('models/cacsrevenda.fields.cac_hora_solucao')</th>
        <th>@lang('models/cacsrevenda.fields.cac_login')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($cacRevendas as $cacRevenda)
            <tr>
                <td>{{ $cacRevenda->cac_representante_id }}</td>
            <td>{{ $cacRevenda->cac_data_abertura }}</td>
            <td>{{ $cacRevenda->cac_hora_abertura }}</td>
            <td>{{ $cacRevenda->cac_tipo }}</td>
            <td>{{ $cacRevenda->cac_descricao }}</td>
            <td>{{ $cacRevenda->cac_solucao }}</td>
            <td>{{ $cacRevenda->cac_status }}</td>
            <td>{{ $cacRevenda->cac_nomecontato }}</td>
            <td>{{ $cacRevenda->cac_data_solucao }}</td>
            <td>{{ $cacRevenda->cac_hora_solucao }}</td>
            <td>{{ $cacRevenda->cac_login }}</td>
                <td>
                    {!! Form::open(['route' => ['cacRevendas.destroy', $cacRevenda->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('cacRevendas.show', [$cacRevenda->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('cacRevendas.edit', [$cacRevenda->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

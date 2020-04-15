<div class="table-responsive">
    <table class="table" id="tarifas-table">
        <thead>
            <tr>
                <th>@lang('models/tarifas1.fields.tar_grupo_id')</th>
        <th>@lang('models/tarifas1.fields.tar_fonecode')</th>
        <th>@lang('models/tarifas1.fields.tar_valor1')</th>
        <th>@lang('models/tarifas1.fields.tar_valor2')</th>
        <th>@lang('models/tarifas1.fields.tar_valor3')</th>
        <th>@lang('models/tarifas1.fields.tar_valor4')</th>
        <th>@lang('models/tarifas1.fields.tar_valor5')</th>
        <th>@lang('models/tarifas1.fields.tar_fornecedor_id')</th>
        <th>@lang('models/tarifas1.fields.tar_valor_diferenciado')</th>
        <th>@lang('models/tarifas1.fields.tar_terminacao_id')</th>
        <th>@lang('models/tarifas1.fields.tar_tipo')</th>
        <th>@lang('models/tarifas1.fields.tar_fazpartefixado')</th>
        <th>@lang('models/tarifas1.fields.tar_terminacao2_id')</th>
        <th>@lang('models/tarifas1.fields.tar_terminacao3_id')</th>
        <th>@lang('models/tarifas1.fields.tar_master')</th>
        <th>@lang('models/tarifas1.fields.tar_descricao')</th>
        <th>@lang('models/tarifas1.fields.tar_terminacao_fax')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tarifas as $tarifa)
            <tr>
                <td>{{ $tarifa->tar_grupo_id }}</td>
            <td>{{ $tarifa->tar_fonecode }}</td>
            <td>{{ $tarifa->tar_valor1 }}</td>
            <td>{{ $tarifa->tar_valor2 }}</td>
            <td>{{ $tarifa->tar_valor3 }}</td>
            <td>{{ $tarifa->tar_valor4 }}</td>
            <td>{{ $tarifa->tar_valor5 }}</td>
            <td>{{ $tarifa->tar_fornecedor_id }}</td>
            <td>{{ $tarifa->tar_valor_diferenciado }}</td>
            <td>{{ $tarifa->tar_terminacao_id }}</td>
            <td>{{ $tarifa->tar_tipo }}</td>
            <td>{{ $tarifa->tar_fazpartefixado }}</td>
            <td>{{ $tarifa->tar_terminacao2_id }}</td>
            <td>{{ $tarifa->tar_terminacao3_id }}</td>
            <td>{{ $tarifa->tar_master }}</td>
            <td>{{ $tarifa->tar_descricao }}</td>
            <td>{{ $tarifa->tar_terminacao_fax }}</td>
                <td>
                    {!! Form::open(['route' => ['tarifas.destroy', $tarifa->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tarifas.show', [$tarifa->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tarifas.edit', [$tarifa->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

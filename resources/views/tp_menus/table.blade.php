<div class="table-responsive">
    <table class="table" id="tpMenus-table">
        <thead>
            <tr>
                <th>@lang('models/tpmenus.fields.tip_descricao')</th>
        <th>@lang('models/tpmenus.fields.tip_menu')</th>
        <th>@lang('models/tpmenus.fields.tip_fornecedor_id')</th>
        <th>@lang('models/tpmenus.fields.tip_representante_id')</th>
        <th>@lang('models/tpmenus.fields.tip_agente_id')</th>
        <th>@lang('models/tpmenus.fields.tip_permissao')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tpMenus as $tpMenu)
            <tr>
                <td>{{ $tpMenu->tip_descricao }}</td>
            <td>{{ $tpMenu->tip_menu }}</td>
            <td>{{ $tpMenu->tip_fornecedor_id }}</td>
            <td>{{ $tpMenu->tip_representante_id }}</td>
            <td>{{ $tpMenu->tip_agente_id }}</td>
            <td>{{ $tpMenu->tip_permissao }}</td>
                <td>
                    {!! Form::open(['route' => ['tpMenus.destroy', $tpMenu->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tpMenus.show', [$tpMenu->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tpMenus.edit', [$tpMenu->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

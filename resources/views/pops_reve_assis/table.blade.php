<div class="table-responsive">
    <table class="table" id="popsReveAssis-table">
        <thead>
            <tr>
                <th>@lang('models/popsreveassi.fields.popar_fornecedor_id')</th>
        <th>@lang('models/popsreveassi.fields.popar_representante_id')</th>
        <th>@lang('models/popsreveassi.fields.popar_assinante')</th>
        <th>@lang('models/popsreveassi.fields.popar_tarifas_id')</th>
        <th>@lang('models/popsreveassi.fields.popar_terminacao1_id')</th>
        <th>@lang('models/popsreveassi.fields.popar_terminacao2_id')</th>
        <th>@lang('models/popsreveassi.fields.popar_terminacao3_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($popsReveAssis as $popsReveAssi)
            <tr>
                <td>{{ $popsReveAssi->popar_fornecedor_id }}</td>
            <td>{{ $popsReveAssi->popar_representante_id }}</td>
            <td>{{ $popsReveAssi->popar_assinante }}</td>
            <td>{{ $popsReveAssi->popar_tarifas_id }}</td>
            <td>{{ $popsReveAssi->popar_terminacao1_id }}</td>
            <td>{{ $popsReveAssi->popar_terminacao2_id }}</td>
            <td>{{ $popsReveAssi->popar_terminacao3_id }}</td>
                <td>
                    {!! Form::open(['route' => ['popsReveAssis.destroy', $popsReveAssi->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('popsReveAssis.show', [$popsReveAssi->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('popsReveAssis.edit', [$popsReveAssi->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="table-responsive">
    <table class="table" id="faxVirtuals-table">
        <thead>
            <tr>
                <th>@lang('models/faxvirtual.fields.fax_descricao')</th>
        <th>@lang('models/faxvirtual.fields.fax_status')</th>
        <th>@lang('models/faxvirtual.fields.fax_documento')</th>
        <th>@lang('models/faxvirtual.fields.fax_data_ini')</th>
        <th>@lang('models/faxvirtual.fields.fax_hora_ini')</th>
        <th>@lang('models/faxvirtual.fields.fax_terminacao_id')</th>
        <th>@lang('models/faxvirtual.fields.fax_fornecedor_id')</th>
        <th>@lang('models/faxvirtual.fields.fax_representante_id')</th>
        <th>@lang('models/faxvirtual.fields.fax_login')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($faxVirtuals as $faxVirtual)
            <tr>
                <td>{{ $faxVirtual->fax_descricao }}</td>
            <td>{{ $faxVirtual->fax_status }}</td>
            <td>{{ $faxVirtual->fax_documento }}</td>
            <td>{{ $faxVirtual->fax_data_ini }}</td>
            <td>{{ $faxVirtual->fax_hora_ini }}</td>
            <td>{{ $faxVirtual->fax_terminacao_id }}</td>
            <td>{{ $faxVirtual->fax_fornecedor_id }}</td>
            <td>{{ $faxVirtual->fax_representante_id }}</td>
            <td>{{ $faxVirtual->fax_login }}</td>
                <td>
                    {!! Form::open(['route' => ['faxVirtuals.destroy', $faxVirtual->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('faxVirtuals.show', [$faxVirtual->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('faxVirtuals.edit', [$faxVirtual->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

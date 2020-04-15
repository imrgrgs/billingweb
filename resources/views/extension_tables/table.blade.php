<div class="table-responsive">
    <table class="table" id="extensionTables-table">
        <thead>
            <tr>
                <th>@lang('models/extensions_table.fields.context')</th>
        <th>@lang('models/extensions_table.fields.exten')</th>
        <th>@lang('models/extensions_table.fields.priority')</th>
        <th>@lang('models/extensions_table.fields.app')</th>
        <th>@lang('models/extensions_table.fields.appdata')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($extensionTables as $extensionTable)
            <tr>
                <td>{{ $extensionTable->context }}</td>
            <td>{{ $extensionTable->exten }}</td>
            <td>{{ $extensionTable->priority }}</td>
            <td>{{ $extensionTable->app }}</td>
            <td>{{ $extensionTable->appdata }}</td>
                <td>
                    {!! Form::open(['route' => ['extensionTables.destroy', $extensionTable->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('extensionTables.show', [$extensionTable->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('extensionTables.edit', [$extensionTable->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

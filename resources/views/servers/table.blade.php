<div class="table-responsive">
    <table class="table" id="servers-table">
        <thead>
            <tr>
                <th>@lang('models/server.fields.ip_number')</th>
        <th>@lang('models/server.fields.type_access')</th>
        <th>@lang('models/server.fields.alias')</th>
        <th>@lang('models/server.fields.ssh_user_access')</th>
        <th>@lang('models/server.fields.ssh_password_access')</th>
        <th>@lang('models/server.fields.ssh_port')</th>
        <th>@lang('models/server.fields.admin_id')</th>
        <th>@lang('models/server.fields.name')</th>
        <th>@lang('models/server.fields.description')</th>
        <th>@lang('models/server.fields.date_created')</th>
        <th>@lang('models/server.fields.date_updated')</th>
        <th>@lang('models/server.fields.status')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($servers as $server)
            <tr>
                <td>{{ $server->ip_number }}</td>
            <td>{{ $server->type_access }}</td>
            <td>{{ $server->alias }}</td>
            <td>{{ $server->ssh_user_access }}</td>
            <td>{{ $server->ssh_password_access }}</td>
            <td>{{ $server->ssh_port }}</td>
            <td>{{ $server->admin_id }}</td>
            <td>{{ $server->name }}</td>
            <td>{{ $server->description }}</td>
            <td>{{ $server->date_created }}</td>
            <td>{{ $server->date_updated }}</td>
            <td>{{ $server->status }}</td>
                <td>
                    {!! Form::open(['route' => ['servers.destroy', $server->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('servers.show', [$server->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('servers.edit', [$server->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

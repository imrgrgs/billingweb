<div class="table-responsive">
    <table class="table" id="firewalls-table">
        <thead>
            <tr>
                <th>@lang('models/firewall.fields.frw_id')</th>
        <th>@lang('models/firewall.fields.frw_status')</th>
        <th>@lang('models/firewall.fields.frw_data')</th>
        <th>@lang('models/firewall.fields.frw_motivo')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($firewalls as $firewall)
            <tr>
                <td>{{ $firewall->frw_id }}</td>
            <td>{{ $firewall->frw_status }}</td>
            <td>{{ $firewall->frw_data }}</td>
            <td>{{ $firewall->frw_motivo }}</td>
                <td>
                    {!! Form::open(['route' => ['firewalls.destroy', $firewall->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('firewalls.show', [$firewall->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('firewalls.edit', [$firewall->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

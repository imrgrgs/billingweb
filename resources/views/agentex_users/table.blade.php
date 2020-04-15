<div class="table-responsive">
    <table class="table" id="agentexUsers-table">
        <thead>
            <tr>
                <th>@lang('models/agentexuser.fields.agu_users_id')</th>
        <th>@lang('models/agentexuser.fields.agu_data')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($agentexUsers as $agentexUser)
            <tr>
                <td>{{ $agentexUser->agu_users_id }}</td>
            <td>{{ $agentexUser->agu_data }}</td>
                <td>
                    {!! Form::open(['route' => ['agentexUsers.destroy', $agentexUser->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('agentexUsers.show', [$agentexUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('agentexUsers.edit', [$agentexUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

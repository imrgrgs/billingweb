<div class="table-responsive">
    <table class="table" id="grupoVoipRamals-table">
        <thead>
            <tr>
                <th>@lang('models/gruposvoipramal.fields.grv_id')</th>
        <th>@lang('models/gruposvoipramal.fields.user_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($grupoVoipRamals as $grupoVoipRamal)
            <tr>
                <td>{{ $grupoVoipRamal->grv_id }}</td>
            <td>{{ $grupoVoipRamal->user_id }}</td>
                <td>
                    {!! Form::open(['route' => ['grupoVoipRamals.destroy', $grupoVoipRamal->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('grupoVoipRamals.show', [$grupoVoipRamal->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('grupoVoipRamals.edit', [$grupoVoipRamal->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

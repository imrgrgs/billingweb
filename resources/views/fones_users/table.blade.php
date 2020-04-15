<div class="table-responsive">
    <table class="table" id="fonesUsers-table">
        <thead>
            <tr>
                <th>@lang('models/fonesusers.fields.fne_telefone')</th>
        <th>@lang('models/fonesusers.fields.fne_user_id')</th>
        <th>@lang('models/fonesusers.fields.retornar_callingcard')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($fonesUsers as $fonesUser)
            <tr>
                <td>{{ $fonesUser->fne_telefone }}</td>
            <td>{{ $fonesUser->fne_user_id }}</td>
            <td>{{ $fonesUser->retornar_callingcard }}</td>
                <td>
                    {!! Form::open(['route' => ['fonesUsers.destroy', $fonesUser->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('fonesUsers.show', [$fonesUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('fonesUsers.edit', [$fonesUser->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

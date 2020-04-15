<div class="table-responsive">
    <table class="table" id="acessos-table">
        <thead>
            <tr>
                <th>@lang('models/acessos.fields.ace_data')</th>
        <th>@lang('models/acessos.fields.ace_hora')</th>
        <th>@lang('models/acessos.fields.ace_ip')</th>
        <th>@lang('models/acessos.fields.ace_login')</th>
        <th>@lang('models/acessos.fields.ace_senha')</th>
        <th>@lang('models/acessos.fields.ace_sucesso')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($acessos as $acesso)
            <tr>
                <td>{{ $acesso->ace_data }}</td>
            <td>{{ $acesso->ace_hora }}</td>
            <td>{{ $acesso->ace_ip }}</td>
            <td>{{ $acesso->ace_login }}</td>
            <td>{{ $acesso->ace_senha }}</td>
            <td>{{ $acesso->ace_sucesso }}</td>
                <td>
                    {!! Form::open(['route' => ['acessos.destroy', $acesso->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('acessos.show', [$acesso->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('acessos.edit', [$acesso->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

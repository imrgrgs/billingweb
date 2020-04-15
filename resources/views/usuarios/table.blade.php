<div class="table-responsive">
    <table class="table" id="usuarios-table">
        <thead>
            <tr>
                <th>@lang('models/usuarios.fields.usr_fornecedor_id')</th>
        <th>@lang('models/usuarios.fields.usr_representante_id')</th>
        <th>@lang('models/usuarios.fields.usr_agente_id')</th>
        <th>@lang('models/usuarios.fields.usr_login')</th>
        <th>@lang('models/usuarios.fields.usr_senha')</th>
        <th>@lang('models/usuarios.fields.usr_status')</th>
        <th>@lang('models/usuarios.fields.usr_permissao')</th>
        <th>@lang('models/usuarios.fields.usr_linguagem')</th>
        <th>@lang('models/usuarios.fields.usr_nome')</th>
        <th>@lang('models/usuarios.fields.usr_tpmenu_id')</th>
        <th>@lang('models/usuarios.fields.usr_admin_id')</th>
        <th>@lang('models/usuarios.fields.usr_assinante_id')</th>
        <th>@lang('models/usuarios.fields.usr_foto')</th>
        <th>@lang('models/usuarios.fields.usr_email')</th>
        <th>@lang('models/usuarios.fields.usr_fone')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($usuarios as $usuario)
            <tr>
                <td>{{ $usuario->usr_fornecedor_id }}</td>
            <td>{{ $usuario->usr_representante_id }}</td>
            <td>{{ $usuario->usr_agente_id }}</td>
            <td>{{ $usuario->usr_login }}</td>
            <td>{{ $usuario->usr_senha }}</td>
            <td>{{ $usuario->usr_status }}</td>
            <td>{{ $usuario->usr_permissao }}</td>
            <td>{{ $usuario->usr_linguagem }}</td>
            <td>{{ $usuario->usr_nome }}</td>
            <td>{{ $usuario->usr_tpmenu_id }}</td>
            <td>{{ $usuario->usr_admin_id }}</td>
            <td>{{ $usuario->usr_assinante_id }}</td>
            <td>{{ $usuario->usr_foto }}</td>
            <td>{{ $usuario->usr_email }}</td>
            <td>{{ $usuario->usr_fone }}</td>
                <td>
                    {!! Form::open(['route' => ['usuarios.destroy', $usuario->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('usuarios.show', [$usuario->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('usuarios.edit', [$usuario->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

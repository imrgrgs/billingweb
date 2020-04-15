<div class="table-responsive">
    <table class="table" id="admins-table">
        <thead>
            <tr>
                <th>@lang('models/admin.fields.adm_razao')</th>
        <th>@lang('models/admin.fields.adm_cnpj')</th>
        <th>@lang('models/admin.fields.adm_inscrest')</th>
        <th>@lang('models/admin.fields.adm_fantasia')</th>
        <th>@lang('models/admin.fields.adm_rua')</th>
        <th>@lang('models/admin.fields.adm_complem')</th>
        <th>@lang('models/admin.fields.adm_bairro')</th>
        <th>@lang('models/admin.fields.adm_cidade')</th>
        <th>@lang('models/admin.fields.adm_estado')</th>
        <th>@lang('models/admin.fields.adm_cep')</th>
        <th>@lang('models/admin.fields.adm_email')</th>
        <th>@lang('models/admin.fields.adm_banco')</th>
        <th>@lang('models/admin.fields.adm_agencia')</th>
        <th>@lang('models/admin.fields.adm_conta')</th>
        <th>@lang('models/admin.fields.adm_saldo')</th>
        <th>@lang('models/admin.fields.adm_login')</th>
        <th>@lang('models/admin.fields.adm_senha')</th>
        <th>@lang('models/admin.fields.adm_mudasenha')</th>
        <th>@lang('models/admin.fields.adm_telefone1')</th>
        <th>@lang('models/admin.fields.adm_telefone2')</th>
        <th>@lang('models/admin.fields.adm_celular')</th>
        <th>@lang('models/admin.fields.adm_data')</th>
        <th>@lang('models/admin.fields.adm_contato')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($admins as $admin)
            <tr>
                <td>{{ $admin->adm_razao }}</td>
            <td>{{ $admin->adm_cnpj }}</td>
            <td>{{ $admin->adm_inscrest }}</td>
            <td>{{ $admin->adm_fantasia }}</td>
            <td>{{ $admin->adm_rua }}</td>
            <td>{{ $admin->adm_complem }}</td>
            <td>{{ $admin->adm_bairro }}</td>
            <td>{{ $admin->adm_cidade }}</td>
            <td>{{ $admin->adm_estado }}</td>
            <td>{{ $admin->adm_cep }}</td>
            <td>{{ $admin->adm_email }}</td>
            <td>{{ $admin->adm_banco }}</td>
            <td>{{ $admin->adm_agencia }}</td>
            <td>{{ $admin->adm_conta }}</td>
            <td>{{ $admin->adm_saldo }}</td>
            <td>{{ $admin->adm_login }}</td>
            <td>{{ $admin->adm_senha }}</td>
            <td>{{ $admin->adm_mudasenha }}</td>
            <td>{{ $admin->adm_telefone1 }}</td>
            <td>{{ $admin->adm_telefone2 }}</td>
            <td>{{ $admin->adm_celular }}</td>
            <td>{{ $admin->adm_data }}</td>
            <td>{{ $admin->adm_contato }}</td>
                <td>
                    {!! Form::open(['route' => ['admins.destroy', $admin->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('admins.show', [$admin->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('admins.edit', [$admin->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

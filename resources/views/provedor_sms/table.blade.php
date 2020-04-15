<div class="table-responsive">
    <table class="table" id="provedorSms-table">
        <thead>
            <tr>
                <th>@lang('models/provedorsms.fields.psms_nome')</th>
        <th>@lang('models/provedorsms.fields.psms_login')</th>
        <th>@lang('models/provedorsms.fields.psms_senha')</th>
        <th>@lang('models/provedorsms.fields.psms_string')</th>
        <th>@lang('models/provedorsms.fields.psms_disponivel')</th>
        <th>@lang('models/provedorsms.fields.psms_saldo')</th>
        <th>@lang('models/provedorsms.fields.psms_vlrsms')</th>
        <th>@lang('models/provedorsms.fields.psms_fornecedor_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($provedorSms as $provedorSms)
            <tr>
                <td>{{ $provedorSms->psms_nome }}</td>
            <td>{{ $provedorSms->psms_login }}</td>
            <td>{{ $provedorSms->psms_senha }}</td>
            <td>{{ $provedorSms->psms_string }}</td>
            <td>{{ $provedorSms->psms_disponivel }}</td>
            <td>{{ $provedorSms->psms_saldo }}</td>
            <td>{{ $provedorSms->psms_vlrsms }}</td>
            <td>{{ $provedorSms->psms_fornecedor_id }}</td>
                <td>
                    {!! Form::open(['route' => ['provedorSms.destroy', $provedorSms->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('provedorSms.show', [$provedorSms->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('provedorSms.edit', [$provedorSms->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="table-responsive">
    <table class="table" id="creditoAdms-table">
        <thead>
            <tr>
                <th>@lang('models/creditosadm.fields.cca_fornecedor_id')</th>
        <th>@lang('models/creditosadm.fields.cca_data')</th>
        <th>@lang('models/creditosadm.fields.cca_hora')</th>
        <th>@lang('models/creditosadm.fields.cca_valor')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($creditoAdms as $creditoAdm)
            <tr>
                <td>{{ $creditoAdm->cca_fornecedor_id }}</td>
            <td>{{ $creditoAdm->cca_data }}</td>
            <td>{{ $creditoAdm->cca_hora }}</td>
            <td>{{ $creditoAdm->cca_valor }}</td>
                <td>
                    {!! Form::open(['route' => ['creditoAdms.destroy', $creditoAdm->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('creditoAdms.show', [$creditoAdm->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('creditoAdms.edit', [$creditoAdm->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

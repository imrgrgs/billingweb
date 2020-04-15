<div class="table-responsive">
    <table class="table" id="contratos-table">
        <thead>
            <tr>
                <th>@lang('models/contrato.fields.cnt_id')</th>
        <th>@lang('models/contrato.fields.cnt_contrato')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($contratos as $contrato)
            <tr>
                <td>{{ $contrato->cnt_id }}</td>
            <td>{{ $contrato->cnt_contrato }}</td>
                <td>
                    {!! Form::open(['route' => ['contratos.destroy', $contrato->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('contratos.show', [$contrato->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('contratos.edit', [$contrato->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

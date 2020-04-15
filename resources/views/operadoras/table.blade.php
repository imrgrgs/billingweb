<div class="table-responsive">
    <table class="table" id="operadoras-table">
        <thead>
            <tr>
                <th>@lang('models/operadoras.fields.opr_id')</th>
        <th>@lang('models/operadoras.fields.opr_nome')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($operadoras as $operadora)
            <tr>
                <td>{{ $operadora->opr_id }}</td>
            <td>{{ $operadora->opr_nome }}</td>
                <td>
                    {!! Form::open(['route' => ['operadoras.destroy', $operadora->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('operadoras.show', [$operadora->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('operadoras.edit', [$operadora->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

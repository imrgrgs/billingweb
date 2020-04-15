<div class="table-responsive">
    <table class="table" id="credito4003s-table">
        <thead>
            <tr>
                <th>@lang('models/creditos4003.fields.cr4_data')</th>
        <th>@lang('models/creditos4003.fields.cr4_hora')</th>
        <th>@lang('models/creditos4003.fields.cr4_valor')</th>
        <th>@lang('models/creditos4003.fields.cr4_tipo')</th>
        <th>@lang('models/creditos4003.fields.cr4_comprovacao')</th>
        <th>@lang('models/creditos4003.fields.cr4_fornecedor_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($credito4003s as $credito4003)
            <tr>
                <td>{{ $credito4003->cr4_data }}</td>
            <td>{{ $credito4003->cr4_hora }}</td>
            <td>{{ $credito4003->cr4_valor }}</td>
            <td>{{ $credito4003->cr4_tipo }}</td>
            <td>{{ $credito4003->cr4_comprovacao }}</td>
            <td>{{ $credito4003->cr4_fornecedor_id }}</td>
                <td>
                    {!! Form::open(['route' => ['credito4003s.destroy', $credito4003->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('credito4003s.show', [$credito4003->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('credito4003s.edit', [$credito4003->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

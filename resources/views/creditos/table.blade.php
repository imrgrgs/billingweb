<div class="table-responsive">
    <table class="table" id="creditos-table">
        <thead>
            <tr>
                <th>@lang('models/creditos.fields.crd_saldo')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($creditos as $credito)
            <tr>
                <td>{{ $credito->crd_saldo }}</td>
                <td>
                    {!! Form::open(['route' => ['creditos.destroy', $credito->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('creditos.show', [$credito->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('creditos.edit', [$credito->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

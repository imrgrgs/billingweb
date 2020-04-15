<div class="table-responsive">
    <table class="table" id="fonesBloqs-table">
        <thead>
            <tr>
                <th>@lang('models/fonesbloq.fields.blq_user_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($fonesBloqs as $fonesBloq)
            <tr>
                <td>{{ $fonesBloq->blq_user_id }}</td>
                <td>
                    {!! Form::open(['route' => ['fonesBloqs.destroy', $fonesBloq->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('fonesBloqs.show', [$fonesBloq->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('fonesBloqs.edit', [$fonesBloq->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

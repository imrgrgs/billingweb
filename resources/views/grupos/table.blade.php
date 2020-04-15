<div class="table-responsive">
    <table class="table" id="grupos-table">
        <thead>
            <tr>
                <th>@lang('models/grupos.fields.gru_descricao')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($grupos as $grupo)
            <tr>
                <td>{{ $grupo->gru_descricao }}</td>
                <td>
                    {!! Form::open(['route' => ['grupos.destroy', $grupo->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('grupos.show', [$grupo->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('grupos.edit', [$grupo->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="table-responsive">
    <table class="table" id="fonesRestricaos-table">
        <thead>
            <tr>
                <th>@lang('models/FonesRestricao.fields.fonesrestricao_user_id')</th>
        <th>@lang('models/FonesRestricao.fields.fonesrestricao_telefone')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($fonesRestricaos as $fonesRestricao)
            <tr>
                <td>{{ $fonesRestricao->fonesrestricao_user_id }}</td>
            <td>{{ $fonesRestricao->fonesrestricao_telefone }}</td>
                <td>
                    {!! Form::open(['route' => ['fonesRestricaos.destroy', $fonesRestricao->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('fonesRestricaos.show', [$fonesRestricao->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('fonesRestricaos.edit', [$fonesRestricao->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

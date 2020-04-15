<div class="table-responsive">
    <table class="table" id="relacaos-table">
        <thead>
            <tr>
                <th>@lang('models/relacao.fields.rel_username')</th>
        <th>@lang('models/relacao.fields.rel_username_amigo')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($relacaos as $relacao)
            <tr>
                <td>{{ $relacao->rel_username }}</td>
            <td>{{ $relacao->rel_username_amigo }}</td>
                <td>
                    {!! Form::open(['route' => ['relacaos.destroy', $relacao->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('relacaos.show', [$relacao->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('relacaos.edit', [$relacao->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

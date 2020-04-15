<div class="table-responsive">
    <table class="table" id="grupoUraDesvios-table">
        <thead>
            <tr>
                <th>@lang('models/grupouradesvio.fields.gru_id')</th>
        <th>@lang('models/grupouradesvio.fields.grudesvio_digito')</th>
        <th>@lang('models/grupouradesvio.fields.grudesvio_nome')</th>
        <th>@lang('models/grupouradesvio.fields.grudesvio_tipo')</th>
        <th>@lang('models/grupouradesvio.fields.grudesvio_chamar')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($grupoUraDesvios as $grupoUraDesvio)
            <tr>
                <td>{{ $grupoUraDesvio->gru_id }}</td>
            <td>{{ $grupoUraDesvio->grudesvio_digito }}</td>
            <td>{{ $grupoUraDesvio->grudesvio_nome }}</td>
            <td>{{ $grupoUraDesvio->grudesvio_tipo }}</td>
            <td>{{ $grupoUraDesvio->grudesvio_chamar }}</td>
                <td>
                    {!! Form::open(['route' => ['grupoUraDesvios.destroy', $grupoUraDesvio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('grupoUraDesvios.show', [$grupoUraDesvio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('grupoUraDesvios.edit', [$grupoUraDesvio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

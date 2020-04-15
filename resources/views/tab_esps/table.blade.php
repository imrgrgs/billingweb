<div class="table-responsive">
    <table class="table" id="tabEsps-table">
        <thead>
            <tr>
                <th>@lang('models/tabesp_10001.fields.tbe_fonecode')</th>
        <th>@lang('models/tabesp_10001.fields.tbe_descricao')</th>
        <th>@lang('models/tabesp_10001.fields.tbe_tipo')</th>
        <th>@lang('models/tabesp_10001.fields.tbe_valor')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tabEsps as $tabEsp)
            <tr>
                <td>{{ $tabEsp->tbe_fonecode }}</td>
            <td>{{ $tabEsp->tbe_descricao }}</td>
            <td>{{ $tabEsp->tbe_tipo }}</td>
            <td>{{ $tabEsp->tbe_valor }}</td>
                <td>
                    {!! Form::open(['route' => ['tabEsps.destroy', $tabEsp->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tabEsps.show', [$tabEsp->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tabEsps.edit', [$tabEsp->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

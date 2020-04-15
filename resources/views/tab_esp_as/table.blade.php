<div class="table-responsive">
    <table class="table" id="tabEspAs-table">
        <thead>
            <tr>
                <th>@lang('models/tabespa_181.fields.tbe_fonecode')</th>
        <th>@lang('models/tabespa_181.fields.tbe_descricao')</th>
        <th>@lang('models/tabespa_181.fields.tbe_tipo')</th>
        <th>@lang('models/tabespa_181.fields.tbe_valor')</th>
        <th>@lang('models/tabespa_181.fields.tbe_vlr_feriado')</th>
        <th>@lang('models/tabespa_181.fields.tbe_vlr_domingo')</th>
        <th>@lang('models/tabespa_181.fields.tbe_hrini_ss')</th>
        <th>@lang('models/tabespa_181.fields.tbe_hrfim_ss')</th>
        <th>@lang('models/tabespa_181.fields.tbe_vlr_ss')</th>
        <th>@lang('models/tabespa_181.fields.tbe_hrini_sabado')</th>
        <th>@lang('models/tabespa_181.fields.tbe_hrfim_sabado')</th>
        <th>@lang('models/tabespa_181.fields.tbe_vlr_sabado')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tabEspAs as $tabEspA)
            <tr>
                <td>{{ $tabEspA->tbe_fonecode }}</td>
            <td>{{ $tabEspA->tbe_descricao }}</td>
            <td>{{ $tabEspA->tbe_tipo }}</td>
            <td>{{ $tabEspA->tbe_valor }}</td>
            <td>{{ $tabEspA->tbe_vlr_feriado }}</td>
            <td>{{ $tabEspA->tbe_vlr_domingo }}</td>
            <td>{{ $tabEspA->tbe_hrini_ss }}</td>
            <td>{{ $tabEspA->tbe_hrfim_ss }}</td>
            <td>{{ $tabEspA->tbe_vlr_ss }}</td>
            <td>{{ $tabEspA->tbe_hrini_sabado }}</td>
            <td>{{ $tabEspA->tbe_hrfim_sabado }}</td>
            <td>{{ $tabEspA->tbe_vlr_sabado }}</td>
                <td>
                    {!! Form::open(['route' => ['tabEspAs.destroy', $tabEspA->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tabEspAs.show', [$tabEspA->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tabEspAs.edit', [$tabEspA->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

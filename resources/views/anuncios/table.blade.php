<div class="table-responsive">
    <table class="table" id="anuncios-table">
        <thead>
            <tr>
                <th>@lang('models/anuncios.fields.anu_descricao')</th>
        <th>@lang('models/anuncios.fields.anu_status')</th>
        <th>@lang('models/anuncios.fields.anu_gingle_wav')</th>
        <th>@lang('models/anuncios.fields.anu_endereco_gingle')</th>
        <th>@lang('models/anuncios.fields.anu_qtde_tocar')</th>
        <th>@lang('models/anuncios.fields.anu_qtde_tocado')</th>
        <th>@lang('models/anuncios.fields.anu_data_tocado')</th>
        <th>@lang('models/anuncios.fields.anu_hora_tocado')</th>
        <th>@lang('models/anuncios.fields.anu_representante_id')</th>
        <th>@lang('models/anuncios.fields.anu_fornecedor_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($anuncios as $anuncio)
            <tr>
                <td>{{ $anuncio->anu_descricao }}</td>
            <td>{{ $anuncio->anu_status }}</td>
            <td>{{ $anuncio->anu_gingle_wav }}</td>
            <td>{{ $anuncio->anu_endereco_gingle }}</td>
            <td>{{ $anuncio->anu_qtde_tocar }}</td>
            <td>{{ $anuncio->anu_qtde_tocado }}</td>
            <td>{{ $anuncio->anu_data_tocado }}</td>
            <td>{{ $anuncio->anu_hora_tocado }}</td>
            <td>{{ $anuncio->anu_representante_id }}</td>
            <td>{{ $anuncio->anu_fornecedor_id }}</td>
                <td>
                    {!! Form::open(['route' => ['anuncios.destroy', $anuncio->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('anuncios.show', [$anuncio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('anuncios.edit', [$anuncio->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

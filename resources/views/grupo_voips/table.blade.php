<div class="table-responsive">
    <table class="table" id="grupoVoips-table">
        <thead>
            <tr>
                <th>@lang('models/gruposvoip.fields.grv_nome')</th>
        <th>@lang('models/gruposvoip.fields.grv_estrategia')</th>
        <th>@lang('models/gruposvoip.fields.grv_representante_id')</th>
        <th>@lang('models/gruposvoip.fields.grv_fornecedor_id')</th>
        <th>@lang('models/gruposvoip.fields.grv_musica_espera')</th>
        <th>@lang('models/gruposvoip.fields.grv_alias_grupo')</th>
        <th>@lang('models/gruposvoip.fields.grv_assinante_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($grupoVoips as $grupoVoip)
            <tr>
                <td>{{ $grupoVoip->grv_nome }}</td>
            <td>{{ $grupoVoip->grv_estrategia }}</td>
            <td>{{ $grupoVoip->grv_representante_id }}</td>
            <td>{{ $grupoVoip->grv_fornecedor_id }}</td>
            <td>{{ $grupoVoip->grv_musica_espera }}</td>
            <td>{{ $grupoVoip->grv_alias_grupo }}</td>
            <td>{{ $grupoVoip->grv_assinante_id }}</td>
                <td>
                    {!! Form::open(['route' => ['grupoVoips.destroy', $grupoVoip->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('grupoVoips.show', [$grupoVoip->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('grupoVoips.edit', [$grupoVoip->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

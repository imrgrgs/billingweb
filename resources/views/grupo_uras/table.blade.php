<div class="table-responsive">
    <table class="table" id="grupoUras-table">
        <thead>
            <tr>
                <th>@lang('models/grupoURA.fields.gru_nome')</th>
        <th>@lang('models/grupoURA.fields.gru_representante_id')</th>
        <th>@lang('models/grupoURA.fields.gru_musica_espera')</th>
        <th>@lang('models/grupoURA.fields.gru_arquivo_ura')</th>
        <th>@lang('models/grupoURA.fields.gru_assinante_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($grupoUras as $grupoUra)
            <tr>
                <td>{{ $grupoUra->gru_nome }}</td>
            <td>{{ $grupoUra->gru_representante_id }}</td>
            <td>{{ $grupoUra->gru_musica_espera }}</td>
            <td>{{ $grupoUra->gru_arquivo_ura }}</td>
            <td>{{ $grupoUra->gru_assinante_id }}</td>
                <td>
                    {!! Form::open(['route' => ['grupoUras.destroy', $grupoUra->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('grupoUras.show', [$grupoUra->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('grupoUras.edit', [$grupoUra->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

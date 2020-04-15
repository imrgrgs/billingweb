<div class="table-responsive">
    <table class="table" id="ordemTerminacaoIas-table">
        <thead>
            <tr>
                <th>@lang('models/ordemterminacoes_ia.fields.oia_fornecedor_id')</th>
        <th>@lang('models/ordemterminacoes_ia.fields.oia_terminacao_id')</th>
        <th>@lang('models/ordemterminacoes_ia.fields.oia_ddd')</th>
        <th>@lang('models/ordemterminacoes_ia.fields.oia_tempo')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($ordemTerminacaoIas as $ordemTerminacaoIa)
            <tr>
                <td>{{ $ordemTerminacaoIa->oia_fornecedor_id }}</td>
            <td>{{ $ordemTerminacaoIa->oia_terminacao_id }}</td>
            <td>{{ $ordemTerminacaoIa->oia_ddd }}</td>
            <td>{{ $ordemTerminacaoIa->oia_tempo }}</td>
                <td>
                    {!! Form::open(['route' => ['ordemTerminacaoIas.destroy', $ordemTerminacaoIa->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('ordemTerminacaoIas.show', [$ordemTerminacaoIa->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('ordemTerminacaoIas.edit', [$ordemTerminacaoIa->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

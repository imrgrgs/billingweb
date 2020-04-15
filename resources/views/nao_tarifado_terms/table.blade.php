<div class="table-responsive">
    <table class="table" id="naoTarifadoTerms-table">
        <thead>
            <tr>
                <th>@lang('models/naotarifadosterm.fields.nao_destino')</th>
        <th>@lang('models/naotarifadosterm.fields.nao_fornecedor_id')</th>
        <th>@lang('models/naotarifadosterm.fields.nao_terminacao_id')</th>
        <th>@lang('models/naotarifadosterm.fields.nao_segundos')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($naoTarifadoTerms as $naoTarifadoTerm)
            <tr>
                <td>{{ $naoTarifadoTerm->nao_destino }}</td>
            <td>{{ $naoTarifadoTerm->nao_fornecedor_id }}</td>
            <td>{{ $naoTarifadoTerm->nao_terminacao_id }}</td>
            <td>{{ $naoTarifadoTerm->nao_segundos }}</td>
                <td>
                    {!! Form::open(['route' => ['naoTarifadoTerms.destroy', $naoTarifadoTerm->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('naoTarifadoTerms.show', [$naoTarifadoTerm->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('naoTarifadoTerms.edit', [$naoTarifadoTerm->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

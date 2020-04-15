<div class="table-responsive">
    <table class="table" id="tabelaReps-table">
        <thead>
            <tr>
                <th>@lang('models/tabelarep1.fields.tbr_tarifacao_id')</th>
        <th>@lang('models/tabelarep1.fields.tbr_valor')</th>
        <th>@lang('models/tabelarep1.fields.tbr_terminacao_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($tabelaReps as $tabelaRep)
            <tr>
                <td>{{ $tabelaRep->tbr_tarifacao_id }}</td>
            <td>{{ $tabelaRep->tbr_valor }}</td>
            <td>{{ $tabelaRep->tbr_terminacao_id }}</td>
                <td>
                    {!! Form::open(['route' => ['tabelaReps.destroy', $tabelaRep->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('tabelaReps.show', [$tabelaRep->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('tabelaReps.edit', [$tabelaRep->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

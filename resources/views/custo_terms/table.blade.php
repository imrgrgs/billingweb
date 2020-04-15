<div class="table-responsive">
    <table class="table" id="custoTerms-table">
        <thead>
            <tr>
                <th>@lang('models/custoterm10.fields.ctt_fonecode')</th>
        <th>@lang('models/custoterm10.fields.ctt_descricao')</th>
        <th>@lang('models/custoterm10.fields.ctt_valor')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($custoTerms as $custoTerm)
            <tr>
                <td>{{ $custoTerm->ctt_fonecode }}</td>
            <td>{{ $custoTerm->ctt_descricao }}</td>
            <td>{{ $custoTerm->ctt_valor }}</td>
                <td>
                    {!! Form::open(['route' => ['custoTerms.destroy', $custoTerm->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('custoTerms.show', [$custoTerm->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('custoTerms.edit', [$custoTerm->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

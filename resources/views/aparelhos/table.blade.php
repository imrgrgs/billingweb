<div class="table-responsive">
    <table class="table" id="aparelhos-table">
        <thead>
            <tr>
                <th>@lang('models/aparelhos.fields.apa_descricao')</th>
        <th>@lang('models/aparelhos.fields.apa_valor')</th>
        <th>@lang('models/aparelhos.fields.apa_fornecedor_id')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($aparelhos as $aparelho)
            <tr>
                <td>{{ $aparelho->apa_descricao }}</td>
            <td>{{ $aparelho->apa_valor }}</td>
            <td>{{ $aparelho->apa_fornecedor_id }}</td>
                <td>
                    {!! Form::open(['route' => ['aparelhos.destroy', $aparelho->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('aparelhos.show', [$aparelho->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('aparelhos.edit', [$aparelho->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

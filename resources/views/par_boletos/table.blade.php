<div class="table-responsive">
    <table class="table" id="parBoletos-table">
        <thead>
            <tr>
                <th>@lang('models/parboleto.fields.bol_empresa_id')</th>
        <th>@lang('models/parboleto.fields.bol_banco')</th>
        <th>@lang('models/parboleto.fields.bol_agencia')</th>
        <th>@lang('models/parboleto.fields.bol_conta')</th>
        <th>@lang('models/parboleto.fields.bol_localpagamento')</th>
        <th>@lang('models/parboleto.fields.bol_carteira')</th>
        <th>@lang('models/parboleto.fields.bol_instrucao1')</th>
        <th>@lang('models/parboleto.fields.bol_instrucao2')</th>
        <th>@lang('models/parboleto.fields.bol_instrucao3')</th>
        <th>@lang('models/parboleto.fields.bol_instrucao4')</th>
        <th>@lang('models/parboleto.fields.bol_instrucao5')</th>
        <th>@lang('models/parboleto.fields.bol_nossonumero')</th>
        <th>@lang('models/parboleto.fields.bol_percjuros')</th>
        <th>@lang('models/parboleto.fields.bol_taxabancaria')</th>
        <th>@lang('models/parboleto.fields.bol_tetotxbanc')</th>
        <th>@lang('models/parboleto.fields.bol_vlrminimo')</th>
        <th>@lang('models/parboleto.fields.bol_convenio')</th>
        <th>@lang('models/parboleto.fields.bol_qtd_dias_vcto')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($parBoletos as $parBoleto)
            <tr>
                <td>{{ $parBoleto->bol_empresa_id }}</td>
            <td>{{ $parBoleto->bol_banco }}</td>
            <td>{{ $parBoleto->bol_agencia }}</td>
            <td>{{ $parBoleto->bol_conta }}</td>
            <td>{{ $parBoleto->bol_localpagamento }}</td>
            <td>{{ $parBoleto->bol_carteira }}</td>
            <td>{{ $parBoleto->bol_instrucao1 }}</td>
            <td>{{ $parBoleto->bol_instrucao2 }}</td>
            <td>{{ $parBoleto->bol_instrucao3 }}</td>
            <td>{{ $parBoleto->bol_instrucao4 }}</td>
            <td>{{ $parBoleto->bol_instrucao5 }}</td>
            <td>{{ $parBoleto->bol_nossonumero }}</td>
            <td>{{ $parBoleto->bol_percjuros }}</td>
            <td>{{ $parBoleto->bol_taxabancaria }}</td>
            <td>{{ $parBoleto->bol_tetotxbanc }}</td>
            <td>{{ $parBoleto->bol_vlrminimo }}</td>
            <td>{{ $parBoleto->bol_convenio }}</td>
            <td>{{ $parBoleto->bol_qtd_dias_vcto }}</td>
                <td>
                    {!! Form::open(['route' => ['parBoletos.destroy', $parBoleto->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('parBoletos.show', [$parBoleto->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('parBoletos.edit', [$parBoleto->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

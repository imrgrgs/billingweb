<div class="table-responsive">
    <table class="table" id="parBoletoRevs-table">
        <thead>
            <tr>
                <th>@lang('models/parboletorev.fields.bol_empresa_id')</th>
        <th>@lang('models/parboletorev.fields.bol_banco')</th>
        <th>@lang('models/parboletorev.fields.bol_agencia')</th>
        <th>@lang('models/parboletorev.fields.bol_conta')</th>
        <th>@lang('models/parboletorev.fields.bol_localpagamento')</th>
        <th>@lang('models/parboletorev.fields.bol_carteira')</th>
        <th>@lang('models/parboletorev.fields.bol_instrucao1')</th>
        <th>@lang('models/parboletorev.fields.bol_instrucao2')</th>
        <th>@lang('models/parboletorev.fields.bol_instrucao3')</th>
        <th>@lang('models/parboletorev.fields.bol_instrucao4')</th>
        <th>@lang('models/parboletorev.fields.bol_instrucao5')</th>
        <th>@lang('models/parboletorev.fields.bol_nossonumero')</th>
        <th>@lang('models/parboletorev.fields.bol_percjuros')</th>
        <th>@lang('models/parboletorev.fields.bol_taxabancaria')</th>
        <th>@lang('models/parboletorev.fields.bol_tetotxbanc')</th>
        <th>@lang('models/parboletorev.fields.bol_vlrminimo')</th>
        <th>@lang('models/parboletorev.fields.bol_convenio')</th>
        <th>@lang('models/parboletorev.fields.bol_qtd_dias_vcto')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($parBoletoRevs as $parBoletoRev)
            <tr>
                <td>{{ $parBoletoRev->bol_empresa_id }}</td>
            <td>{{ $parBoletoRev->bol_banco }}</td>
            <td>{{ $parBoletoRev->bol_agencia }}</td>
            <td>{{ $parBoletoRev->bol_conta }}</td>
            <td>{{ $parBoletoRev->bol_localpagamento }}</td>
            <td>{{ $parBoletoRev->bol_carteira }}</td>
            <td>{{ $parBoletoRev->bol_instrucao1 }}</td>
            <td>{{ $parBoletoRev->bol_instrucao2 }}</td>
            <td>{{ $parBoletoRev->bol_instrucao3 }}</td>
            <td>{{ $parBoletoRev->bol_instrucao4 }}</td>
            <td>{{ $parBoletoRev->bol_instrucao5 }}</td>
            <td>{{ $parBoletoRev->bol_nossonumero }}</td>
            <td>{{ $parBoletoRev->bol_percjuros }}</td>
            <td>{{ $parBoletoRev->bol_taxabancaria }}</td>
            <td>{{ $parBoletoRev->bol_tetotxbanc }}</td>
            <td>{{ $parBoletoRev->bol_vlrminimo }}</td>
            <td>{{ $parBoletoRev->bol_convenio }}</td>
            <td>{{ $parBoletoRev->bol_qtd_dias_vcto }}</td>
                <td>
                    {!! Form::open(['route' => ['parBoletoRevs.destroy', $parBoletoRev->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('parBoletoRevs.show', [$parBoletoRev->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('parBoletoRevs.edit', [$parBoletoRev->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

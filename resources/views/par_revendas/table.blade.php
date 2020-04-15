<div class="table-responsive">
    <table class="table" id="parRevendas-table">
        <thead>
            <tr>
                <th>@lang('models/parrevenda.fields.prv_representante_id')</th>
        <th>@lang('models/parrevenda.fields.prv_reais_inclusao')</th>
        <th>@lang('models/parrevenda.fields.prv_perc_acrescimo')</th>
        <th>@lang('models/parrevenda.fields.prv_emitir_boleto')</th>
        <th>@lang('models/parrevenda.fields.prv_vlr_avisar')</th>
        <th>@lang('models/parrevenda.fields.prv_reais_gratis')</th>
        <th>@lang('models/parrevenda.fields.prv_avisar_pospagos')</th>
        <th>@lang('models/parrevenda.fields.prv_dias_creditos_vencem')</th>
        <th>@lang('models/parrevenda.fields.prv_tempo_ligacao')</th>
        <th>@lang('models/parrevenda.fields.prv_linkassinantesonline')</th>
        <th>@lang('models/parrevenda.fields.prv_tocar_anuncios')</th>
        <th>@lang('models/parrevenda.fields.prv_brpay')</th>
        <th>@lang('models/parrevenda.fields.prv_webcallback')</th>
        <th>@lang('models/parrevenda.fields.prv_obriga_documento')</th>
        <th>@lang('models/parrevenda.fields.prv_tempo_ligacao_cel')</th>
        <th>@lang('models/parrevenda.fields.prv_taxa_conexao')</th>
        <th>@lang('models/parrevenda.fields.prv_taxa_desconexao')</th>
        <th>@lang('models/parrevenda.fields.prv_assinante_incluir_ass')</th>
        <th>@lang('models/parrevenda.fields.prv_perc_assin_inclui_ass')</th>
        <th>@lang('models/parrevenda.fields.prv_transf_creditos')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($parRevendas as $parRevenda)
            <tr>
                <td>{{ $parRevenda->prv_representante_id }}</td>
            <td>{{ $parRevenda->prv_reais_inclusao }}</td>
            <td>{{ $parRevenda->prv_perc_acrescimo }}</td>
            <td>{{ $parRevenda->prv_emitir_boleto }}</td>
            <td>{{ $parRevenda->prv_vlr_avisar }}</td>
            <td>{{ $parRevenda->prv_reais_gratis }}</td>
            <td>{{ $parRevenda->prv_avisar_pospagos }}</td>
            <td>{{ $parRevenda->prv_dias_creditos_vencem }}</td>
            <td>{{ $parRevenda->prv_tempo_ligacao }}</td>
            <td>{{ $parRevenda->prv_linkassinantesonline }}</td>
            <td>{{ $parRevenda->prv_tocar_anuncios }}</td>
            <td>{{ $parRevenda->prv_brpay }}</td>
            <td>{{ $parRevenda->prv_webcallback }}</td>
            <td>{{ $parRevenda->prv_obriga_documento }}</td>
            <td>{{ $parRevenda->prv_tempo_ligacao_cel }}</td>
            <td>{{ $parRevenda->prv_taxa_conexao }}</td>
            <td>{{ $parRevenda->prv_taxa_desconexao }}</td>
            <td>{{ $parRevenda->prv_assinante_incluir_ass }}</td>
            <td>{{ $parRevenda->prv_perc_assin_inclui_ass }}</td>
            <td>{{ $parRevenda->prv_transf_creditos }}</td>
                <td>
                    {!! Form::open(['route' => ['parRevendas.destroy', $parRevenda->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('parRevendas.show', [$parRevenda->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('parRevendas.edit', [$parRevenda->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

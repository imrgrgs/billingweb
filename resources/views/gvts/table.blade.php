<div class="table-responsive">
    <table class="table" id="gvts-table">
        <thead>
            <tr>
                <th>@lang('models/gvt.fields.gvt_user')</th>
        <th>@lang('models/gvt.fields.gvt_pass')</th>
        <th>@lang('models/gvt.fields.gvt_url')</th>
        <th>@lang('models/gvt.fields.gvt_porta')</th>
        <th>@lang('models/gvt.fields.gvt_user_fsol')</th>
        <th>@lang('models/gvt.fields.gvt_status')</th>
        <th>@lang('models/gvt.fields.gvt_fornecedor_id')</th>
        <th>@lang('models/gvt.fields.gvt_numfone')</th>
        <th>@lang('models/gvt.fields.gvt_aplicacao')</th>
        <th>@lang('models/gvt.fields.gvt_vlr_callingcard')</th>
        <th>@lang('models/gvt.fields.gvt_tp_tarifacao')</th>
        <th>@lang('models/gvt.fields.gvt_fazer_registro')</th>
        <th>@lang('models/gvt.fields.gvt_vlr_conexao_fixo')</th>
        <th>@lang('models/gvt.fields.gvt_vlr_conexao_celular')</th>
        <th>@lang('models/gvt.fields.gvt_vlr_callingcard_cel')</th>
        <th>@lang('models/gvt.fields.gvt_identificador_via_uri')</th>
        <th>@lang('models/gvt.fields.gvt_arq_audio')</th>
        <th>@lang('models/gvt.fields.gvt_lig_gratuita')</th>
        <th>@lang('models/gvt.fields.gvt_tmp_maximo_gratuita')</th>
        <th>@lang('models/gvt.fields.gvt_codec1')</th>
        <th>@lang('models/gvt.fields.gvt_codec2')</th>
        <th>@lang('models/gvt.fields.gvt_codec3')</th>
        <th>@lang('models/gvt.fields.gvt_codec4')</th>
        <th>@lang('models/gvt.fields.gvt_codec5')</th>
        <th>@lang('models/gvt.fields.pode_transferir')</th>
        <th>@lang('models/gvt.fields.gvt_representante_id')</th>
        <th>@lang('models/gvt.fields.gvt_tabprecos_id')</th>
        <th>@lang('models/gvt.fields.gvt_vlr_fx_revenda')</th>
        <th>@lang('models/gvt.fields.gvt_vlr_cel_revenda')</th>
        <th>@lang('models/gvt.fields.gvt_recebe_de')</th>
        <th>@lang('models/gvt.fields.gvt_lista_negra')</th>
        <th>@lang('models/gvt.fields.gvt_tipo_atendimento')</th>
        <th>@lang('models/gvt.fields.gvt_telegram_token')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($gvts as $gvt)
            <tr>
                <td>{{ $gvt->gvt_user }}</td>
            <td>{{ $gvt->gvt_pass }}</td>
            <td>{{ $gvt->gvt_url }}</td>
            <td>{{ $gvt->gvt_porta }}</td>
            <td>{{ $gvt->gvt_user_fsol }}</td>
            <td>{{ $gvt->gvt_status }}</td>
            <td>{{ $gvt->gvt_fornecedor_id }}</td>
            <td>{{ $gvt->gvt_numfone }}</td>
            <td>{{ $gvt->gvt_aplicacao }}</td>
            <td>{{ $gvt->gvt_vlr_callingcard }}</td>
            <td>{{ $gvt->gvt_tp_tarifacao }}</td>
            <td>{{ $gvt->gvt_fazer_registro }}</td>
            <td>{{ $gvt->gvt_vlr_conexao_fixo }}</td>
            <td>{{ $gvt->gvt_vlr_conexao_celular }}</td>
            <td>{{ $gvt->gvt_vlr_callingcard_cel }}</td>
            <td>{{ $gvt->gvt_identificador_via_uri }}</td>
            <td>{{ $gvt->gvt_arq_audio }}</td>
            <td>{{ $gvt->gvt_lig_gratuita }}</td>
            <td>{{ $gvt->gvt_tmp_maximo_gratuita }}</td>
            <td>{{ $gvt->gvt_codec1 }}</td>
            <td>{{ $gvt->gvt_codec2 }}</td>
            <td>{{ $gvt->gvt_codec3 }}</td>
            <td>{{ $gvt->gvt_codec4 }}</td>
            <td>{{ $gvt->gvt_codec5 }}</td>
            <td>{{ $gvt->pode_transferir }}</td>
            <td>{{ $gvt->gvt_representante_id }}</td>
            <td>{{ $gvt->gvt_tabprecos_id }}</td>
            <td>{{ $gvt->gvt_vlr_fx_revenda }}</td>
            <td>{{ $gvt->gvt_vlr_cel_revenda }}</td>
            <td>{{ $gvt->gvt_recebe_de }}</td>
            <td>{{ $gvt->gvt_lista_negra }}</td>
            <td>{{ $gvt->gvt_tipo_atendimento }}</td>
            <td>{{ $gvt->gvt_telegram_token }}</td>
                <td>
                    {!! Form::open(['route' => ['gvts.destroy', $gvt->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('gvts.show', [$gvt->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('gvts.edit', [$gvt->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

<div class="table-responsive">
    <table class="table" id="publicidades-table">
        <thead>
            <tr>
                <th>@lang('models/publicidade.fields.pub_descricao')</th>
        <th>@lang('models/publicidade.fields.pub_status')</th>
        <th>@lang('models/publicidade.fields.pub_gingle_wav')</th>
        <th>@lang('models/publicidade.fields.pub_endereco_gingle')</th>
        <th>@lang('models/publicidade.fields.pub_gingle_wav2')</th>
        <th>@lang('models/publicidade.fields.pub_endereco_gingle2')</th>
        <th>@lang('models/publicidade.fields.pub_tempo_gingle')</th>
        <th>@lang('models/publicidade.fields.pub_data_ini')</th>
        <th>@lang('models/publicidade.fields.pub_hora_ini')</th>
        <th>@lang('models/publicidade.fields.pub_terminacao_id')</th>
        <th>@lang('models/publicidade.fields.pub_fornecedor_id')</th>
        <th>@lang('models/publicidade.fields.pub_login')</th>
        <th>@lang('models/publicidade.fields.pub_maxretries')</th>
        <th>@lang('models/publicidade.fields.pub_retrytime')</th>
        <th>@lang('models/publicidade.fields.pub_waittime')</th>
        <th>@lang('models/publicidade.fields.pub_reinclusao_automatica')</th>
        <th>@lang('models/publicidade.fields.pub_representante_id')</th>
        <th>@lang('models/publicidade.fields.pub_checar_satisfacao')</th>
        <th>@lang('models/publicidade.fields.pub_hora_parar')</th>
        <th>@lang('models/publicidade.fields.pub_qtd_simult_noite')</th>
        <th>@lang('models/publicidade.fields.pub_qtd_simult_dia')</th>
        <th>@lang('models/publicidade.fields.pub_data_encerrar')</th>
        <th>@lang('models/publicidade.fields.pub_bloqueia_procon')</th>
        <th>@lang('models/publicidade.fields.pub_initial_silence')</th>
        <th>@lang('models/publicidade.fields.pub_greeting')</th>
        <th>@lang('models/publicidade.fields.pub_after_greeting_silence')</th>
        <th>@lang('models/publicidade.fields.pub_total_analysis_time')</th>
        <th>@lang('models/publicidade.fields.pub_minimum_word_length')</th>
        <th>@lang('models/publicidade.fields.pub_between_words_silence')</th>
        <th>@lang('models/publicidade.fields.pub_maximum_number_of_words')</th>
        <th>@lang('models/publicidade.fields.pub_silence_threshold')</th>
        <th>@lang('models/publicidade.fields.pub_maximum_word_length')</th>
        <th>@lang('models/publicidade.fields.pub_checar_automatizado')</th>
        <th>@lang('models/publicidade.fields.pub_intervalo_envio')</th>
        <th>@lang('models/publicidade.fields.pub_volume_envio_por_intervalo')</th>
                <th colspan="3">@lang('crud.action')</th>
            </tr>
        </thead>
        <tbody>
        @foreach($publicidades as $publicidade)
            <tr>
                <td>{{ $publicidade->pub_descricao }}</td>
            <td>{{ $publicidade->pub_status }}</td>
            <td>{{ $publicidade->pub_gingle_wav }}</td>
            <td>{{ $publicidade->pub_endereco_gingle }}</td>
            <td>{{ $publicidade->pub_gingle_wav2 }}</td>
            <td>{{ $publicidade->pub_endereco_gingle2 }}</td>
            <td>{{ $publicidade->pub_tempo_gingle }}</td>
            <td>{{ $publicidade->pub_data_ini }}</td>
            <td>{{ $publicidade->pub_hora_ini }}</td>
            <td>{{ $publicidade->pub_terminacao_id }}</td>
            <td>{{ $publicidade->pub_fornecedor_id }}</td>
            <td>{{ $publicidade->pub_login }}</td>
            <td>{{ $publicidade->pub_maxretries }}</td>
            <td>{{ $publicidade->pub_retrytime }}</td>
            <td>{{ $publicidade->pub_waittime }}</td>
            <td>{{ $publicidade->pub_reinclusao_automatica }}</td>
            <td>{{ $publicidade->pub_representante_id }}</td>
            <td>{{ $publicidade->pub_checar_satisfacao }}</td>
            <td>{{ $publicidade->pub_hora_parar }}</td>
            <td>{{ $publicidade->pub_qtd_simult_noite }}</td>
            <td>{{ $publicidade->pub_qtd_simult_dia }}</td>
            <td>{{ $publicidade->pub_data_encerrar }}</td>
            <td>{{ $publicidade->pub_bloqueia_procon }}</td>
            <td>{{ $publicidade->pub_initial_silence }}</td>
            <td>{{ $publicidade->pub_greeting }}</td>
            <td>{{ $publicidade->pub_after_greeting_silence }}</td>
            <td>{{ $publicidade->pub_total_analysis_time }}</td>
            <td>{{ $publicidade->pub_minimum_word_length }}</td>
            <td>{{ $publicidade->pub_between_words_silence }}</td>
            <td>{{ $publicidade->pub_maximum_number_of_words }}</td>
            <td>{{ $publicidade->pub_silence_threshold }}</td>
            <td>{{ $publicidade->pub_maximum_word_length }}</td>
            <td>{{ $publicidade->pub_checar_automatizado }}</td>
            <td>{{ $publicidade->pub_intervalo_envio }}</td>
            <td>{{ $publicidade->pub_volume_envio_por_intervalo }}</td>
                <td>
                    {!! Form::open(['route' => ['publicidades.destroy', $publicidade->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('publicidades.show', [$publicidade->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('publicidades.edit', [$publicidade->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => 'return confirm("'.__('crud.are_you_sure').'")']) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

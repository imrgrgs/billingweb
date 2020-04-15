<!-- Pub Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_descricao', __('models/publicidade.fields.pub_descricao').':') !!}
    {!! Form::text('pub_descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_status', __('models/publicidade.fields.pub_status').':') !!}
    {!! Form::text('pub_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Gingle Wav Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_gingle_wav', __('models/publicidade.fields.pub_gingle_wav').':') !!}
    {!! Form::text('pub_gingle_wav', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Endereco Gingle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_endereco_gingle', __('models/publicidade.fields.pub_endereco_gingle').':') !!}
    {!! Form::text('pub_endereco_gingle', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Gingle Wav2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_gingle_wav2', __('models/publicidade.fields.pub_gingle_wav2').':') !!}
    {!! Form::text('pub_gingle_wav2', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Endereco Gingle2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_endereco_gingle2', __('models/publicidade.fields.pub_endereco_gingle2').':') !!}
    {!! Form::text('pub_endereco_gingle2', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Tempo Gingle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_tempo_gingle', __('models/publicidade.fields.pub_tempo_gingle').':') !!}
    {!! Form::number('pub_tempo_gingle', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Data Ini Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_data_ini', __('models/publicidade.fields.pub_data_ini').':') !!}
    {!! Form::text('pub_data_ini', null, ['class' => 'form-control','id'=>'pub_data_ini']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#pub_data_ini').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Pub Hora Ini Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_hora_ini', __('models/publicidade.fields.pub_hora_ini').':') !!}
    {!! Form::text('pub_hora_ini', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Terminacao Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_terminacao_id', __('models/publicidade.fields.pub_terminacao_id').':') !!}
    {!! Form::number('pub_terminacao_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_fornecedor_id', __('models/publicidade.fields.pub_fornecedor_id').':') !!}
    {!! Form::number('pub_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Login Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_login', __('models/publicidade.fields.pub_login').':') !!}
    {!! Form::text('pub_login', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Maxretries Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_maxretries', __('models/publicidade.fields.pub_maxretries').':') !!}
    {!! Form::number('pub_maxretries', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Retrytime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_retrytime', __('models/publicidade.fields.pub_retrytime').':') !!}
    {!! Form::number('pub_retrytime', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Waittime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_waittime', __('models/publicidade.fields.pub_waittime').':') !!}
    {!! Form::number('pub_waittime', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Reinclusao Automatica Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_reinclusao_automatica', __('models/publicidade.fields.pub_reinclusao_automatica').':') !!}
    {!! Form::number('pub_reinclusao_automatica', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_representante_id', __('models/publicidade.fields.pub_representante_id').':') !!}
    {!! Form::number('pub_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Checar Satisfacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_checar_satisfacao', __('models/publicidade.fields.pub_checar_satisfacao').':') !!}
    {!! Form::text('pub_checar_satisfacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Hora Parar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_hora_parar', __('models/publicidade.fields.pub_hora_parar').':') !!}
    {!! Form::text('pub_hora_parar', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Qtd Simult Noite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_qtd_simult_noite', __('models/publicidade.fields.pub_qtd_simult_noite').':') !!}
    {!! Form::number('pub_qtd_simult_noite', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Qtd Simult Dia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_qtd_simult_dia', __('models/publicidade.fields.pub_qtd_simult_dia').':') !!}
    {!! Form::number('pub_qtd_simult_dia', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Data Encerrar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_data_encerrar', __('models/publicidade.fields.pub_data_encerrar').':') !!}
    {!! Form::text('pub_data_encerrar', null, ['class' => 'form-control','id'=>'pub_data_encerrar']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#pub_data_encerrar').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Pub Bloqueia Procon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_bloqueia_procon', __('models/publicidade.fields.pub_bloqueia_procon').':') !!}
    {!! Form::text('pub_bloqueia_procon', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Initial Silence Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_initial_silence', __('models/publicidade.fields.pub_initial_silence').':') !!}
    {!! Form::number('pub_initial_silence', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Greeting Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_greeting', __('models/publicidade.fields.pub_greeting').':') !!}
    {!! Form::number('pub_greeting', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub After Greeting Silence Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_after_greeting_silence', __('models/publicidade.fields.pub_after_greeting_silence').':') !!}
    {!! Form::number('pub_after_greeting_silence', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Total Analysis Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_total_analysis_time', __('models/publicidade.fields.pub_total_analysis_time').':') !!}
    {!! Form::number('pub_total_analysis_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Minimum Word Length Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_minimum_word_length', __('models/publicidade.fields.pub_minimum_word_length').':') !!}
    {!! Form::number('pub_minimum_word_length', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Between Words Silence Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_between_words_silence', __('models/publicidade.fields.pub_between_words_silence').':') !!}
    {!! Form::number('pub_between_words_silence', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Maximum Number Of Words Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_maximum_number_of_words', __('models/publicidade.fields.pub_maximum_number_of_words').':') !!}
    {!! Form::number('pub_maximum_number_of_words', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Silence Threshold Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_silence_threshold', __('models/publicidade.fields.pub_silence_threshold').':') !!}
    {!! Form::number('pub_silence_threshold', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Maximum Word Length Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_maximum_word_length', __('models/publicidade.fields.pub_maximum_word_length').':') !!}
    {!! Form::number('pub_maximum_word_length', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Checar Automatizado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_checar_automatizado', __('models/publicidade.fields.pub_checar_automatizado').':') !!}
    {!! Form::text('pub_checar_automatizado', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Intervalo Envio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_intervalo_envio', __('models/publicidade.fields.pub_intervalo_envio').':') !!}
    {!! Form::number('pub_intervalo_envio', null, ['class' => 'form-control']) !!}
</div>

<!-- Pub Volume Envio Por Intervalo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_volume_envio_por_intervalo', __('models/publicidade.fields.pub_volume_envio_por_intervalo').':') !!}
    {!! Form::number('pub_volume_envio_por_intervalo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('publicidades.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

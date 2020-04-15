<!-- Smsc Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smsc_descricao', __('models/smscampanha.fields.smsc_descricao').':') !!}
    {!! Form::text('smsc_descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Smsc Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smsc_status', __('models/smscampanha.fields.smsc_status').':') !!}
    {!! Form::text('smsc_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Smsc Data Ini Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smsc_data_ini', __('models/smscampanha.fields.smsc_data_ini').':') !!}
    {!! Form::text('smsc_data_ini', null, ['class' => 'form-control','id'=>'smsc_data_ini']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#smsc_data_ini').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Smsc Hora Ini Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smsc_hora_ini', __('models/smscampanha.fields.smsc_hora_ini').':') !!}
    {!! Form::text('smsc_hora_ini', null, ['class' => 'form-control']) !!}
</div>

<!-- Smsc Terminacao Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smsc_terminacao_id', __('models/smscampanha.fields.smsc_terminacao_id').':') !!}
    {!! Form::number('smsc_terminacao_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Smsc Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smsc_fornecedor_id', __('models/smscampanha.fields.smsc_fornecedor_id').':') !!}
    {!! Form::number('smsc_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Smsc Login Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smsc_login', __('models/smscampanha.fields.smsc_login').':') !!}
    {!! Form::text('smsc_login', null, ['class' => 'form-control']) !!}
</div>

<!-- Smsc Maxretries Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smsc_maxretries', __('models/smscampanha.fields.smsc_maxretries').':') !!}
    {!! Form::number('smsc_maxretries', null, ['class' => 'form-control']) !!}
</div>

<!-- Smsc Retrytime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smsc_retrytime', __('models/smscampanha.fields.smsc_retrytime').':') !!}
    {!! Form::number('smsc_retrytime', null, ['class' => 'form-control']) !!}
</div>

<!-- Smsc Waittime Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smsc_waittime', __('models/smscampanha.fields.smsc_waittime').':') !!}
    {!! Form::number('smsc_waittime', null, ['class' => 'form-control']) !!}
</div>

<!-- Smsc Reinclusao Automatica Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smsc_reinclusao_automatica', __('models/smscampanha.fields.smsc_reinclusao_automatica').':') !!}
    {!! Form::number('smsc_reinclusao_automatica', null, ['class' => 'form-control']) !!}
</div>

<!-- Smsc Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smsc_representante_id', __('models/smscampanha.fields.smsc_representante_id').':') !!}
    {!! Form::number('smsc_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Smsc Hora Parar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smsc_hora_parar', __('models/smscampanha.fields.smsc_hora_parar').':') !!}
    {!! Form::text('smsc_hora_parar', null, ['class' => 'form-control']) !!}
</div>

<!-- Smsc Qtd Simult Noite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smsc_qtd_simult_noite', __('models/smscampanha.fields.smsc_qtd_simult_noite').':') !!}
    {!! Form::number('smsc_qtd_simult_noite', null, ['class' => 'form-control']) !!}
</div>

<!-- Smsc Qtd Simult Dia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smsc_qtd_simult_dia', __('models/smscampanha.fields.smsc_qtd_simult_dia').':') !!}
    {!! Form::number('smsc_qtd_simult_dia', null, ['class' => 'form-control']) !!}
</div>

<!-- Smsc Data Encerrar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smsc_data_encerrar', __('models/smscampanha.fields.smsc_data_encerrar').':') !!}
    {!! Form::text('smsc_data_encerrar', null, ['class' => 'form-control','id'=>'smsc_data_encerrar']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#smsc_data_encerrar').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Smsc Bloqueia Procon Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smsc_bloqueia_procon', __('models/smscampanha.fields.smsc_bloqueia_procon').':') !!}
    {!! Form::text('smsc_bloqueia_procon', null, ['class' => 'form-control']) !!}
</div>

<!-- Smsc Intervalo Envio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smsc_intervalo_envio', __('models/smscampanha.fields.smsc_intervalo_envio').':') !!}
    {!! Form::number('smsc_intervalo_envio', null, ['class' => 'form-control']) !!}
</div>

<!-- Smsc Volume Envio Por Intervalo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smsc_volume_envio_por_intervalo', __('models/smscampanha.fields.smsc_volume_envio_por_intervalo').':') !!}
    {!! Form::number('smsc_volume_envio_por_intervalo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('smsCampanhas.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

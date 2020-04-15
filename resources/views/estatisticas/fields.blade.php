<!-- Est Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('est_destino', __('models/estatisticas.fields.est_destino').':') !!}
    {!! Form::text('est_destino', null, ['class' => 'form-control']) !!}
</div>

<!-- Est Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('est_fornecedor_id', __('models/estatisticas.fields.est_fornecedor_id').':') !!}
    {!! Form::number('est_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Est Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('est_representante_id', __('models/estatisticas.fields.est_representante_id').':') !!}
    {!! Form::number('est_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Est Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('est_status', __('models/estatisticas.fields.est_status').':') !!}
    {!! Form::text('est_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Est Tempo Ate Atender Field -->
<div class="form-group col-sm-6">
    {!! Form::label('est_tempo_ate_atender', __('models/estatisticas.fields.est_tempo_ate_atender').':') !!}
    {!! Form::number('est_tempo_ate_atender', null, ['class' => 'form-control']) !!}
</div>

<!-- Est Tempo Conversa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('est_tempo_conversa', __('models/estatisticas.fields.est_tempo_conversa').':') !!}
    {!! Form::number('est_tempo_conversa', null, ['class' => 'form-control']) !!}
</div>

<!-- Est Terminacao Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('est_terminacao_id', __('models/estatisticas.fields.est_terminacao_id').':') !!}
    {!! Form::number('est_terminacao_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Est Assinante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('est_assinante', __('models/estatisticas.fields.est_assinante').':') !!}
    {!! Form::text('est_assinante', null, ['class' => 'form-control']) !!}
</div>

<!-- Est Data Inicio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('est_data_inicio', __('models/estatisticas.fields.est_data_inicio').':') !!}
    {!! Form::text('est_data_inicio', null, ['class' => 'form-control','id'=>'est_data_inicio']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#est_data_inicio').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Est Data Final Field -->
<div class="form-group col-sm-6">
    {!! Form::label('est_data_final', __('models/estatisticas.fields.est_data_final').':') !!}
    {!! Form::text('est_data_final', null, ['class' => 'form-control','id'=>'est_data_final']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#est_data_final').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Est Tentativa Field -->
<div class="form-group col-sm-6">
    {!! Form::label('est_tentativa', __('models/estatisticas.fields.est_tentativa').':') !!}
    {!! Form::number('est_tentativa', null, ['class' => 'form-control']) !!}
</div>

<!-- Est Uniqueid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('est_uniqueid', __('models/estatisticas.fields.est_uniqueid').':') !!}
    {!! Form::text('est_uniqueid', null, ['class' => 'form-control']) !!}
</div>

<!-- Est Causahangup Field -->
<div class="form-group col-sm-6">
    {!! Form::label('est_causahangup', __('models/estatisticas.fields.est_causahangup').':') !!}
    {!! Form::number('est_causahangup', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('estatisticas.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

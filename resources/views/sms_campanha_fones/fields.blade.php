<!-- Smscf Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smscf_telefone', __('models/smscampanhafone1.fields.smscf_telefone').':') !!}
    {!! Form::text('smscf_telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- Smscf Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smscf_nome', __('models/smscampanhafone1.fields.smscf_nome').':') !!}
    {!! Form::text('smscf_nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Smscf Data Ligar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smscf_data_ligar', __('models/smscampanhafone1.fields.smscf_data_ligar').':') !!}
    {!! Form::text('smscf_data_ligar', null, ['class' => 'form-control','id'=>'smscf_data_ligar']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#smscf_data_ligar').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Smscf Hora Ligar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smscf_hora_ligar', __('models/smscampanhafone1.fields.smscf_hora_ligar').':') !!}
    {!! Form::text('smscf_hora_ligar', null, ['class' => 'form-control']) !!}
</div>

<!-- Smscf Data Ligou Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smscf_data_ligou', __('models/smscampanhafone1.fields.smscf_data_ligou').':') !!}
    {!! Form::text('smscf_data_ligou', null, ['class' => 'form-control','id'=>'smscf_data_ligou']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#smscf_data_ligou').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Smscf Hora Ligou Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smscf_hora_ligou', __('models/smscampanhafone1.fields.smscf_hora_ligou').':') !!}
    {!! Form::text('smscf_hora_ligou', null, ['class' => 'form-control']) !!}
</div>

<!-- Smscf Terminacao Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smscf_terminacao_id', __('models/smscampanhafone1.fields.smscf_terminacao_id').':') !!}
    {!! Form::number('smscf_terminacao_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Smscf Criouarq Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smscf_criouarq', __('models/smscampanhafone1.fields.smscf_criouarq').':') !!}
    {!! Form::text('smscf_criouarq', null, ['class' => 'form-control']) !!}
</div>

<!-- Smscf Reinclusao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smscf_reinclusao', __('models/smscampanhafone1.fields.smscf_reinclusao').':') !!}
    {!! Form::number('smscf_reinclusao', null, ['class' => 'form-control']) !!}
</div>

<!-- Smscf Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smscf_status', __('models/smscampanhafone1.fields.smscf_status').':') !!}
    {!! Form::text('smscf_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Smscf Message Field -->
<div class="form-group col-sm-6">
    {!! Form::label('smscf_message', __('models/smscampanhafone1.fields.smscf_message').':') !!}
    {!! Form::text('smscf_message', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('smsCampanhaFones.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

<!-- Pbt Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pbt_telefone', __('models/publicfones10.fields.pbt_telefone').':') !!}
    {!! Form::text('pbt_telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- Pbt Data Ligar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pbt_data_ligar', __('models/publicfones10.fields.pbt_data_ligar').':') !!}
    {!! Form::text('pbt_data_ligar', null, ['class' => 'form-control','id'=>'pbt_data_ligar']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#pbt_data_ligar').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Pbt Hora Ligar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pbt_hora_ligar', __('models/publicfones10.fields.pbt_hora_ligar').':') !!}
    {!! Form::text('pbt_hora_ligar', null, ['class' => 'form-control']) !!}
</div>

<!-- Pbt Data Ligou Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pbt_data_ligou', __('models/publicfones10.fields.pbt_data_ligou').':') !!}
    {!! Form::text('pbt_data_ligou', null, ['class' => 'form-control','id'=>'pbt_data_ligou']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#pbt_data_ligou').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Pbt Hora Ligou Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pbt_hora_ligou', __('models/publicfones10.fields.pbt_hora_ligou').':') !!}
    {!! Form::text('pbt_hora_ligou', null, ['class' => 'form-control']) !!}
</div>

<!-- Pbt Tempo Ouviu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pbt_tempo_ouviu', __('models/publicfones10.fields.pbt_tempo_ouviu').':') !!}
    {!! Form::number('pbt_tempo_ouviu', null, ['class' => 'form-control']) !!}
</div>

<!-- Pbt Obs Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pbt_obs', __('models/publicfones10.fields.pbt_obs').':') !!}
    {!! Form::text('pbt_obs', null, ['class' => 'form-control']) !!}
</div>

<!-- Pbt Terminacao Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pbt_terminacao_id', __('models/publicfones10.fields.pbt_terminacao_id').':') !!}
    {!! Form::number('pbt_terminacao_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Pbt Criouarq Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pbt_criouarq', __('models/publicfones10.fields.pbt_criouarq').':') !!}
    {!! Form::text('pbt_criouarq', null, ['class' => 'form-control']) !!}
</div>

<!-- Pbt Reinclusao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pbt_reinclusao', __('models/publicfones10.fields.pbt_reinclusao').':') !!}
    {!! Form::number('pbt_reinclusao', null, ['class' => 'form-control']) !!}
</div>

<!-- Pbt Cpf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pbt_cpf', __('models/publicfones10.fields.pbt_cpf').':') !!}
    {!! Form::number('pbt_cpf', null, ['class' => 'form-control']) !!}
</div>

<!-- Pbt Satisfacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pbt_satisfacao', __('models/publicfones10.fields.pbt_satisfacao').':') !!}
    {!! Form::text('pbt_satisfacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('publicFones.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

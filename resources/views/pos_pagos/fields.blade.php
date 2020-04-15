<!-- Pos Plano Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pos_plano_id', __('models/pospagos.fields.pos_plano_id').':') !!}
    {!! Form::number('pos_plano_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Pos Data Contrato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pos_data_contrato', __('models/pospagos.fields.pos_data_contrato').':') !!}
    {!! Form::text('pos_data_contrato', null, ['class' => 'form-control','id'=>'pos_data_contrato']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#pos_data_contrato').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Pos Utilizado Fixo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pos_utilizado_fixo', __('models/pospagos.fields.pos_utilizado_fixo').':') !!}
    {!! Form::number('pos_utilizado_fixo', null, ['class' => 'form-control']) !!}
</div>

<!-- Pos Utilizado Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pos_utilizado_celular', __('models/pospagos.fields.pos_utilizado_celular').':') !!}
    {!! Form::number('pos_utilizado_celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Pos Dia Zerar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pos_dia_zerar', __('models/pospagos.fields.pos_dia_zerar').':') !!}
    {!! Form::number('pos_dia_zerar', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('posPagos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

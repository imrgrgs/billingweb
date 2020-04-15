<!-- Sdg Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sdg_data', __('models/saldosgerais.fields.sdg_data').':') !!}
    {!! Form::text('sdg_data', null, ['class' => 'form-control','id'=>'sdg_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#sdg_data').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Sdg Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sdg_hora', __('models/saldosgerais.fields.sdg_hora').':') !!}
    {!! Form::text('sdg_hora', null, ['class' => 'form-control']) !!}
</div>

<!-- Sdg Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sdg_tipo', __('models/saldosgerais.fields.sdg_tipo').':') !!}
    {!! Form::text('sdg_tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Sdg Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sdg_valor', __('models/saldosgerais.fields.sdg_valor').':') !!}
    {!! Form::number('sdg_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Sdg Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sdg_codigo', __('models/saldosgerais.fields.sdg_codigo').':') !!}
    {!! Form::number('sdg_codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('saldoGerals.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

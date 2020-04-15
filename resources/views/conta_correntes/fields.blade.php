<!-- Cco Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cco_data', __('models/contacorrente.fields.cco_data').':') !!}
    {!! Form::text('cco_data', null, ['class' => 'form-control','id'=>'cco_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#cco_data').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Cco Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cco_hora', __('models/contacorrente.fields.cco_hora').':') !!}
    {!! Form::text('cco_hora', null, ['class' => 'form-control']) !!}
</div>

<!-- Cco Historico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cco_historico', __('models/contacorrente.fields.cco_historico').':') !!}
    {!! Form::text('cco_historico', null, ['class' => 'form-control']) !!}
</div>

<!-- Cco Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cco_valor', __('models/contacorrente.fields.cco_valor').':') !!}
    {!! Form::number('cco_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Cco Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cco_tipo', __('models/contacorrente.fields.cco_tipo').':') !!}
    {!! Form::text('cco_tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Cco Assinante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cco_assinante', __('models/contacorrente.fields.cco_assinante').':') !!}
    {!! Form::text('cco_assinante', null, ['class' => 'form-control']) !!}
</div>

<!-- Cco Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cco_representante_id', __('models/contacorrente.fields.cco_representante_id').':') !!}
    {!! Form::number('cco_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cco Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cco_fornecedor_id', __('models/contacorrente.fields.cco_fornecedor_id').':') !!}
    {!! Form::number('cco_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contaCorrentes.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

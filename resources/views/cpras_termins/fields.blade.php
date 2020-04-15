<!-- Cpr Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpr_data', __('models/cprastermin.fields.cpr_data').':') !!}
    {!! Form::text('cpr_data', null, ['class' => 'form-control','id'=>'cpr_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#cpr_data').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Cpr Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpr_hora', __('models/cprastermin.fields.cpr_hora').':') !!}
    {!! Form::text('cpr_hora', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpr Historico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpr_historico', __('models/cprastermin.fields.cpr_historico').':') !!}
    {!! Form::text('cpr_historico', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpr Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpr_valor', __('models/cprastermin.fields.cpr_valor').':') !!}
    {!! Form::number('cpr_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpr Operacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpr_operacao', __('models/cprastermin.fields.cpr_operacao').':') !!}
    {!! Form::text('cpr_operacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpr Terminacao Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpr_terminacao_id', __('models/cprastermin.fields.cpr_terminacao_id').':') !!}
    {!! Form::number('cpr_terminacao_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cpr Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cpr_fornecedor_id', __('models/cprastermin.fields.cpr_fornecedor_id').':') !!}
    {!! Form::number('cpr_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cprasTermins.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

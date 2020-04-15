<!-- Cr4 Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cr4_data', __('models/creditos4003.fields.cr4_data').':') !!}
    {!! Form::text('cr4_data', null, ['class' => 'form-control','id'=>'cr4_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#cr4_data').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Cr4 Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cr4_hora', __('models/creditos4003.fields.cr4_hora').':') !!}
    {!! Form::text('cr4_hora', null, ['class' => 'form-control']) !!}
</div>

<!-- Cr4 Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cr4_valor', __('models/creditos4003.fields.cr4_valor').':') !!}
    {!! Form::number('cr4_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Cr4 Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cr4_tipo', __('models/creditos4003.fields.cr4_tipo').':') !!}
    {!! Form::text('cr4_tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Cr4 Comprovacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cr4_comprovacao', __('models/creditos4003.fields.cr4_comprovacao').':') !!}
    {!! Form::text('cr4_comprovacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Cr4 Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cr4_fornecedor_id', __('models/creditos4003.fields.cr4_fornecedor_id').':') !!}
    {!! Form::number('cr4_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('credito4003s.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

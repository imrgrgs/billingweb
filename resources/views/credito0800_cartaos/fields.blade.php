<!-- Cr8 Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cr8_data', __('models/creditos0800cartoes.fields.cr8_data').':') !!}
    {!! Form::text('cr8_data', null, ['class' => 'form-control','id'=>'cr8_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#cr8_data').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Cr8 Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cr8_hora', __('models/creditos0800cartoes.fields.cr8_hora').':') !!}
    {!! Form::text('cr8_hora', null, ['class' => 'form-control']) !!}
</div>

<!-- Cr8 Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cr8_valor', __('models/creditos0800cartoes.fields.cr8_valor').':') !!}
    {!! Form::number('cr8_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Cr8 Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cr8_tipo', __('models/creditos0800cartoes.fields.cr8_tipo').':') !!}
    {!! Form::text('cr8_tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Cr8 Comprovacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cr8_comprovacao', __('models/creditos0800cartoes.fields.cr8_comprovacao').':') !!}
    {!! Form::text('cr8_comprovacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Cr8 Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cr8_fornecedor_id', __('models/creditos0800cartoes.fields.cr8_fornecedor_id').':') !!}
    {!! Form::number('cr8_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('credito0800Cartaos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

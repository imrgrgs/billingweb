<!-- Cma Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cma_fornecedor_id', __('models/cpamaster.fields.cma_fornecedor_id').':') !!}
    {!! Form::number('cma_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cma Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cma_data', __('models/cpamaster.fields.cma_data').':') !!}
    {!! Form::text('cma_data', null, ['class' => 'form-control','id'=>'cma_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#cma_data').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Cma Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cma_hora', __('models/cpamaster.fields.cma_hora').':') !!}
    {!! Form::text('cma_hora', null, ['class' => 'form-control']) !!}
</div>

<!-- Cma Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cma_valor', __('models/cpamaster.fields.cma_valor').':') !!}
    {!! Form::number('cma_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Cma Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cma_status', __('models/cpamaster.fields.cma_status').':') !!}
    {!! Form::text('cma_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Cma Dataliberou Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cma_dataliberou', __('models/cpamaster.fields.cma_dataliberou').':') !!}
    {!! Form::text('cma_dataliberou', null, ['class' => 'form-control','id'=>'cma_dataliberou']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#cma_dataliberou').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Cma Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cma_tipo', __('models/cpamaster.fields.cma_tipo').':') !!}
    {!! Form::text('cma_tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Cma Historico Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cma_historico', __('models/cpamaster.fields.cma_historico').':') !!}
    {!! Form::text('cma_historico', null, ['class' => 'form-control']) !!}
</div>

<!-- Cma Boleto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cma_boleto', __('models/cpamaster.fields.cma_boleto').':') !!}
    {!! Form::text('cma_boleto', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cpaMasters.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

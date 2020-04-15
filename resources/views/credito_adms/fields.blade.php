<!-- Cca Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cca_fornecedor_id', __('models/creditosadm.fields.cca_fornecedor_id').':') !!}
    {!! Form::number('cca_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cca Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cca_data', __('models/creditosadm.fields.cca_data').':') !!}
    {!! Form::text('cca_data', null, ['class' => 'form-control','id'=>'cca_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#cca_data').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Cca Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cca_hora', __('models/creditosadm.fields.cca_hora').':') !!}
    {!! Form::text('cca_hora', null, ['class' => 'form-control']) !!}
</div>

<!-- Cca Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cca_valor', __('models/creditosadm.fields.cca_valor').':') !!}
    {!! Form::number('cca_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('creditoAdms.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

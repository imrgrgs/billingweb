<!-- Fax Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax_descricao', __('models/faxvirtual.fields.fax_descricao').':') !!}
    {!! Form::text('fax_descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax_status', __('models/faxvirtual.fields.fax_status').':') !!}
    {!! Form::text('fax_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Documento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax_documento', __('models/faxvirtual.fields.fax_documento').':') !!}
    {!! Form::text('fax_documento', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Data Ini Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax_data_ini', __('models/faxvirtual.fields.fax_data_ini').':') !!}
    {!! Form::text('fax_data_ini', null, ['class' => 'form-control','id'=>'fax_data_ini']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fax_data_ini').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Fax Hora Ini Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax_hora_ini', __('models/faxvirtual.fields.fax_hora_ini').':') !!}
    {!! Form::text('fax_hora_ini', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Terminacao Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax_terminacao_id', __('models/faxvirtual.fields.fax_terminacao_id').':') !!}
    {!! Form::number('fax_terminacao_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax_fornecedor_id', __('models/faxvirtual.fields.fax_fornecedor_id').':') !!}
    {!! Form::number('fax_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax_representante_id', __('models/faxvirtual.fields.fax_representante_id').':') !!}
    {!! Form::number('fax_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Fax Login Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fax_login', __('models/faxvirtual.fields.fax_login').':') !!}
    {!! Form::text('fax_login', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('faxVirtuals.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

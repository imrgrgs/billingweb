<!-- Esms Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('esms_data', __('models/enviosms.fields.esms_data').':') !!}
    {!! Form::text('esms_data', null, ['class' => 'form-control','id'=>'esms_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#esms_data').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Esms Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('esms_valor', __('models/enviosms.fields.esms_valor').':') !!}
    {!! Form::number('esms_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Esms Valor Rev Field -->
<div class="form-group col-sm-6">
    {!! Form::label('esms_valor_rev', __('models/enviosms.fields.esms_valor_rev').':') !!}
    {!! Form::number('esms_valor_rev', null, ['class' => 'form-control']) !!}
</div>

<!-- Esms Valor Ass Field -->
<div class="form-group col-sm-6">
    {!! Form::label('esms_valor_ass', __('models/enviosms.fields.esms_valor_ass').':') !!}
    {!! Form::number('esms_valor_ass', null, ['class' => 'form-control']) !!}
</div>

<!-- Esms Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('esms_status', __('models/enviosms.fields.esms_status').':') !!}
    {!! Form::text('esms_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Esms Assinante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('esms_assinante', __('models/enviosms.fields.esms_assinante').':') !!}
    {!! Form::text('esms_assinante', null, ['class' => 'form-control']) !!}
</div>

<!-- Esms Fone Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('esms_fone_destino', __('models/enviosms.fields.esms_fone_destino').':') !!}
    {!! Form::text('esms_fone_destino', null, ['class' => 'form-control']) !!}
</div>

<!-- Esms Mensagem Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('esms_mensagem', __('models/enviosms.fields.esms_mensagem').':') !!}
    {!! Form::textarea('esms_mensagem', null, ['class' => 'form-control']) !!}
</div>
@push('scripts')
    <script type="text/javascript">
        CKEDITOR.replace('esms_mensagem', {
          language: '{{ strtolower(config('app.locale')) }}',
          height: '150px',
        })
    </script>
@endpush


<!-- Esms Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('esms_fornecedor_id', __('models/enviosms.fields.esms_fornecedor_id').':') !!}
    {!! Form::number('esms_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Esms Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('esms_representante_id', __('models/enviosms.fields.esms_representante_id').':') !!}
    {!! Form::number('esms_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('envioSms.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

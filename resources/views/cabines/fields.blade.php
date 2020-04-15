<!-- Cab Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cab_data', __('models/cabines.fields.cab_data').':') !!}
    {!! Form::text('cab_data', null, ['class' => 'form-control','id'=>'cab_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#cab_data').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Cab Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cab_hora', __('models/cabines.fields.cab_hora').':') !!}
    {!! Form::text('cab_hora', null, ['class' => 'form-control']) !!}
</div>

<!-- Cab Cliente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cab_cliente', __('models/cabines.fields.cab_cliente').':') !!}
    {!! Form::text('cab_cliente', null, ['class' => 'form-control']) !!}
</div>

<!-- Cab User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cab_user_id', __('models/cabines.fields.cab_user_id').':') !!}
    {!! Form::number('cab_user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cab Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cab_representante_id', __('models/cabines.fields.cab_representante_id').':') !!}
    {!! Form::number('cab_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cab Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cab_fornecedor_id', __('models/cabines.fields.cab_fornecedor_id').':') !!}
    {!! Form::number('cab_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cabines.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

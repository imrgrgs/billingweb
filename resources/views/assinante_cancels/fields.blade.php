<!-- Atv User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('atv_user_id', __('models/userscancel.fields.atv_user_id').':') !!}
    {!! Form::number('atv_user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Atv Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('atv_data', __('models/userscancel.fields.atv_data').':') !!}
    {!! Form::text('atv_data', null, ['class' => 'form-control','id'=>'atv_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#atv_data').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Atv Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('atv_hora', __('models/userscancel.fields.atv_hora').':') !!}
    {!! Form::text('atv_hora', null, ['class' => 'form-control']) !!}
</div>

<!-- Atv Atualizado Ant Field -->
<div class="form-group col-sm-6">
    {!! Form::label('atv_atualizado_ant', __('models/userscancel.fields.atv_atualizado_ant').':') !!}
    {!! Form::text('atv_atualizado_ant', null, ['class' => 'form-control']) !!}
</div>

<!-- Atv Atualizado Atu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('atv_atualizado_atu', __('models/userscancel.fields.atv_atualizado_atu').':') !!}
    {!! Form::text('atv_atualizado_atu', null, ['class' => 'form-control']) !!}
</div>

<!-- Atv Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('atv_representante_id', __('models/userscancel.fields.atv_representante_id').':') !!}
    {!! Form::number('atv_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Atv Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('atv_fornecedor_id', __('models/userscancel.fields.atv_fornecedor_id').':') !!}
    {!! Form::number('atv_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('assinanteCancels.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

<!-- Fpro Ddd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fpro_ddd', __('models/fonesprocon.fields.fpro_ddd').':') !!}
    {!! Form::text('fpro_ddd', null, ['class' => 'form-control']) !!}
</div>

<!-- Fpro Fone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fpro_fone', __('models/fonesprocon.fields.fpro_fone').':') !!}
    {!! Form::text('fpro_fone', null, ['class' => 'form-control']) !!}
</div>

<!-- Fpro Dddfone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fpro_dddfone', __('models/fonesprocon.fields.fpro_dddfone').':') !!}
    {!! Form::text('fpro_dddfone', null, ['class' => 'form-control']) !!}
</div>

<!-- Fpro Cadastro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fpro_cadastro', __('models/fonesprocon.fields.fpro_cadastro').':') !!}
    {!! Form::text('fpro_cadastro', null, ['class' => 'form-control','id'=>'fpro_cadastro']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fpro_cadastro').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Fpro Evento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fpro_evento', __('models/fonesprocon.fields.fpro_evento').':') !!}
    {!! Form::text('fpro_evento', null, ['class' => 'form-control']) !!}
</div>

<!-- Fpro Data Evento Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fpro_data_evento', __('models/fonesprocon.fields.fpro_data_evento').':') !!}
    {!! Form::text('fpro_data_evento', null, ['class' => 'form-control','id'=>'fpro_data_evento']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fpro_data_evento').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('fonesProcons.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

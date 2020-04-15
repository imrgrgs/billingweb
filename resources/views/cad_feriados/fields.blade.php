<!-- Fer Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fer_data', __('models/cadferiados.fields.fer_data').':') !!}
    {!! Form::text('fer_data', null, ['class' => 'form-control','id'=>'fer_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#fer_data').datepicker({
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
    <a href="{{ route('cadFeriados.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

<!-- Agu Users Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agu_users_id', __('models/agentexuser.fields.agu_users_id').':') !!}
    {!! Form::number('agu_users_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Agu Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('agu_data', __('models/agentexuser.fields.agu_data').':') !!}
    {!! Form::text('agu_data', null, ['class' => 'form-control','id'=>'agu_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#agu_data').datepicker({
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
    <a href="{{ route('agentexUsers.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

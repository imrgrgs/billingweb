<!-- Ip Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ip_number', __('models/server.fields.ip_number').':') !!}
    {!! Form::text('ip_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Type Access Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type_access', __('models/server.fields.type_access').':') !!}
    {!! Form::text('type_access', null, ['class' => 'form-control']) !!}
</div>

<!-- Alias Field -->
<div class="form-group col-sm-6">
    {!! Form::label('alias', __('models/server.fields.alias').':') !!}
    {!! Form::text('alias', null, ['class' => 'form-control']) !!}
</div>

<!-- Ssh User Access Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ssh_user_access', __('models/server.fields.ssh_user_access').':') !!}
    {!! Form::text('ssh_user_access', null, ['class' => 'form-control']) !!}
</div>

<!-- Ssh Password Access Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ssh_password_access', __('models/server.fields.ssh_password_access').':') !!}
    {!! Form::text('ssh_password_access', null, ['class' => 'form-control']) !!}
</div>

<!-- Ssh Port Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ssh_port', __('models/server.fields.ssh_port').':') !!}
    {!! Form::text('ssh_port', null, ['class' => 'form-control']) !!}
</div>

<!-- Admin Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('admin_id', __('models/server.fields.admin_id').':') !!}
    {!! Form::number('admin_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', __('models/server.fields.name').':') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', __('models/server.fields.description').':') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>
@push('scripts')
    <script type="text/javascript">
        CKEDITOR.replace('description', {
          language: '{{ strtolower(config('app.locale')) }}',
          height: '150px',
        })
    </script>
@endpush


<!-- Date Created Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_created', __('models/server.fields.date_created').':') !!}
    {!! Form::text('date_created', null, ['class' => 'form-control','id'=>'date_created']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#date_created').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Date Updated Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date_updated', __('models/server.fields.date_updated').':') !!}
    {!! Form::text('date_updated', null, ['class' => 'form-control','id'=>'date_updated']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#date_updated').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('status', __('models/server.fields.status').':') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('servers.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

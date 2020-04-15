<!-- Ip Number Field -->
<div class="form-group">
    {!! Form::label('ip_number', __('models/server.fields.ip_number').':') !!}
    <p>{{ $server->ip_number }}</p>
</div>

<!-- Type Access Field -->
<div class="form-group">
    {!! Form::label('type_access', __('models/server.fields.type_access').':') !!}
    <p>{{ $server->type_access }}</p>
</div>

<!-- Alias Field -->
<div class="form-group">
    {!! Form::label('alias', __('models/server.fields.alias').':') !!}
    <p>{{ $server->alias }}</p>
</div>

<!-- Ssh User Access Field -->
<div class="form-group">
    {!! Form::label('ssh_user_access', __('models/server.fields.ssh_user_access').':') !!}
    <p>{{ $server->ssh_user_access }}</p>
</div>

<!-- Ssh Password Access Field -->
<div class="form-group">
    {!! Form::label('ssh_password_access', __('models/server.fields.ssh_password_access').':') !!}
    <p>{{ $server->ssh_password_access }}</p>
</div>

<!-- Ssh Port Field -->
<div class="form-group">
    {!! Form::label('ssh_port', __('models/server.fields.ssh_port').':') !!}
    <p>{{ $server->ssh_port }}</p>
</div>

<!-- Admin Id Field -->
<div class="form-group">
    {!! Form::label('admin_id', __('models/server.fields.admin_id').':') !!}
    <p>{{ $server->admin_id }}</p>
</div>

<!-- Name Field -->
<div class="form-group">
    {!! Form::label('name', __('models/server.fields.name').':') !!}
    <p>{{ $server->name }}</p>
</div>

<!-- Description Field -->
<div class="form-group">
    {!! Form::label('description', __('models/server.fields.description').':') !!}
    <p>{{ $server->description }}</p>
</div>

<!-- Date Created Field -->
<div class="form-group">
    {!! Form::label('date_created', __('models/server.fields.date_created').':') !!}
    <p>{{ $server->date_created }}</p>
</div>

<!-- Date Updated Field -->
<div class="form-group">
    {!! Form::label('date_updated', __('models/server.fields.date_updated').':') !!}
    <p>{{ $server->date_updated }}</p>
</div>

<!-- Status Field -->
<div class="form-group">
    {!! Form::label('status', __('models/server.fields.status').':') !!}
    <p>{{ $server->status }}</p>
</div>


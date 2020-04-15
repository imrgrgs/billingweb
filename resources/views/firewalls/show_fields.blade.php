<!-- Frw Id Field -->
<div class="form-group">
    {!! Form::label('frw_id', __('models/firewall.fields.frw_id').':') !!}
    <p>{{ $firewall->frw_id }}</p>
</div>

<!-- Frw Status Field -->
<div class="form-group">
    {!! Form::label('frw_status', __('models/firewall.fields.frw_status').':') !!}
    <p>{{ $firewall->frw_status }}</p>
</div>

<!-- Frw Data Field -->
<div class="form-group">
    {!! Form::label('frw_data', __('models/firewall.fields.frw_data').':') !!}
    <p>{{ $firewall->frw_data }}</p>
</div>

<!-- Frw Motivo Field -->
<div class="form-group">
    {!! Form::label('frw_motivo', __('models/firewall.fields.frw_motivo').':') !!}
    <p>{{ $firewall->frw_motivo }}</p>
</div>


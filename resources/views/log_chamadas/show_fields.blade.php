<!-- Log Datahora Field -->
<div class="form-group">
    {!! Form::label('log_datahora', __('models/logchamadas.fields.log_datahora').':') !!}
    <p>{{ $logChamada->log_datahora }}</p>
</div>

<!-- Log Destino Field -->
<div class="form-group">
    {!! Form::label('log_destino', __('models/logchamadas.fields.log_destino').':') !!}
    <p>{{ $logChamada->log_destino }}</p>
</div>

<!-- Log Texto Field -->
<div class="form-group">
    {!! Form::label('log_texto', __('models/logchamadas.fields.log_texto').':') !!}
    <p>{{ $logChamada->log_texto }}</p>
</div>


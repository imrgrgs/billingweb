<!-- Context Field -->
<div class="form-group">
    {!! Form::label('context', __('models/extensions_table.fields.context').':') !!}
    <p>{{ $extensionTable->context }}</p>
</div>

<!-- Exten Field -->
<div class="form-group">
    {!! Form::label('exten', __('models/extensions_table.fields.exten').':') !!}
    <p>{{ $extensionTable->exten }}</p>
</div>

<!-- Priority Field -->
<div class="form-group">
    {!! Form::label('priority', __('models/extensions_table.fields.priority').':') !!}
    <p>{{ $extensionTable->priority }}</p>
</div>

<!-- App Field -->
<div class="form-group">
    {!! Form::label('app', __('models/extensions_table.fields.app').':') !!}
    <p>{{ $extensionTable->app }}</p>
</div>

<!-- Appdata Field -->
<div class="form-group">
    {!! Form::label('appdata', __('models/extensions_table.fields.appdata').':') !!}
    <p>{{ $extensionTable->appdata }}</p>
</div>


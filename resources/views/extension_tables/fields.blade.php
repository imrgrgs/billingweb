<!-- Context Field -->
<div class="form-group col-sm-6">
    {!! Form::label('context', __('models/extensions_table.fields.context').':') !!}
    {!! Form::text('context', null, ['class' => 'form-control']) !!}
</div>

<!-- Exten Field -->
<div class="form-group col-sm-6">
    {!! Form::label('exten', __('models/extensions_table.fields.exten').':') !!}
    {!! Form::text('exten', null, ['class' => 'form-control']) !!}
</div>

<!-- Priority Field -->
<div class="form-group col-sm-6">
    {!! Form::label('priority', __('models/extensions_table.fields.priority').':') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('priority', 0) !!}
        {!! Form::checkbox('priority', '1', null) !!} 1
    </label>
</div>

<!-- App Field -->
<div class="form-group col-sm-6">
    {!! Form::label('app', __('models/extensions_table.fields.app').':') !!}
    {!! Form::text('app', null, ['class' => 'form-control']) !!}
</div>

<!-- Appdata Field -->
<div class="form-group col-sm-6">
    {!! Form::label('appdata', __('models/extensions_table.fields.appdata').':') !!}
    {!! Form::text('appdata', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('extensionTables.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

<!-- Psms Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('psms_nome', __('models/provedorsms.fields.psms_nome').':') !!}
    {!! Form::text('psms_nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Psms Login Field -->
<div class="form-group col-sm-6">
    {!! Form::label('psms_login', __('models/provedorsms.fields.psms_login').':') !!}
    {!! Form::text('psms_login', null, ['class' => 'form-control']) !!}
</div>

<!-- Psms Senha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('psms_senha', __('models/provedorsms.fields.psms_senha').':') !!}
    {!! Form::text('psms_senha', null, ['class' => 'form-control']) !!}
</div>

<!-- Psms String Field -->
<div class="form-group col-sm-6">
    {!! Form::label('psms_string', __('models/provedorsms.fields.psms_string').':') !!}
    {!! Form::text('psms_string', null, ['class' => 'form-control']) !!}
</div>

<!-- Psms Disponivel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('psms_disponivel', __('models/provedorsms.fields.psms_disponivel').':') !!}
    {!! Form::text('psms_disponivel', null, ['class' => 'form-control']) !!}
</div>

<!-- Psms Saldo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('psms_saldo', __('models/provedorsms.fields.psms_saldo').':') !!}
    {!! Form::number('psms_saldo', null, ['class' => 'form-control']) !!}
</div>

<!-- Psms Vlrsms Field -->
<div class="form-group col-sm-6">
    {!! Form::label('psms_vlrsms', __('models/provedorsms.fields.psms_vlrsms').':') !!}
    {!! Form::number('psms_vlrsms', null, ['class' => 'form-control']) !!}
</div>

<!-- Psms Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('psms_fornecedor_id', __('models/provedorsms.fields.psms_fornecedor_id').':') !!}
    {!! Form::number('psms_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('provedorSms.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

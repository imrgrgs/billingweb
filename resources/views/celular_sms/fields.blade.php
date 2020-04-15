<!-- Csms Num Cell Field -->
<div class="form-group col-sm-6">
    {!! Form::label('csms_num_cell', __('models/celularessms.fields.csms_num_cell').':') !!}
    {!! Form::text('csms_num_cell', null, ['class' => 'form-control']) !!}
</div>

<!-- Csms Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('csms_nome', __('models/celularessms.fields.csms_nome').':') !!}
    {!! Form::text('csms_nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Csms Grupo Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('csms_grupo_id', __('models/celularessms.fields.csms_grupo_id').':') !!}
    {!! Form::number('csms_grupo_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Csms Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('csms_fornecedor_id', __('models/celularessms.fields.csms_fornecedor_id').':') !!}
    {!! Form::number('csms_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Csms Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('csms_representante_id', __('models/celularessms.fields.csms_representante_id').':') !!}
    {!! Form::number('csms_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Csms Assinante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('csms_assinante_id', __('models/celularessms.fields.csms_assinante_id').':') !!}
    {!! Form::number('csms_assinante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('celularSms.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

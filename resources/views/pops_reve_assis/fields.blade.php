<!-- Popar Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('popar_fornecedor_id', __('models/popsreveassi.fields.popar_fornecedor_id').':') !!}
    {!! Form::number('popar_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Popar Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('popar_representante_id', __('models/popsreveassi.fields.popar_representante_id').':') !!}
    {!! Form::number('popar_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Popar Assinante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('popar_assinante', __('models/popsreveassi.fields.popar_assinante').':') !!}
    {!! Form::text('popar_assinante', null, ['class' => 'form-control']) !!}
</div>

<!-- Popar Tarifas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('popar_tarifas_id', __('models/popsreveassi.fields.popar_tarifas_id').':') !!}
    {!! Form::number('popar_tarifas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Popar Terminacao1 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('popar_terminacao1_id', __('models/popsreveassi.fields.popar_terminacao1_id').':') !!}
    {!! Form::number('popar_terminacao1_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Popar Terminacao2 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('popar_terminacao2_id', __('models/popsreveassi.fields.popar_terminacao2_id').':') !!}
    {!! Form::number('popar_terminacao2_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Popar Terminacao3 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('popar_terminacao3_id', __('models/popsreveassi.fields.popar_terminacao3_id').':') !!}
    {!! Form::number('popar_terminacao3_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('popsReveAssis.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

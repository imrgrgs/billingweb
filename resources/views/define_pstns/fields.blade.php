<!-- Def Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('def_fornecedor_id', __('models/definepstn.fields.def_fornecedor_id').':') !!}
    {!! Form::number('def_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Def Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('def_representante_id', __('models/definepstn.fields.def_representante_id').':') !!}
    {!! Form::number('def_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Def Assinante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('def_assinante_id', __('models/definepstn.fields.def_assinante_id').':') !!}
    {!! Form::number('def_assinante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Def Pais Field -->
<div class="form-group col-sm-6">
    {!! Form::label('def_pais', __('models/definepstn.fields.def_pais').':') !!}
    {!! Form::text('def_pais', null, ['class' => 'form-control']) !!}
</div>

<!-- Def Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('def_tipo', __('models/definepstn.fields.def_tipo').':') !!}
    {!! Form::text('def_tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Def Ddiddd Ini Field -->
<div class="form-group col-sm-6">
    {!! Form::label('def_ddiddd_ini', __('models/definepstn.fields.def_ddiddd_ini').':') !!}
    {!! Form::text('def_ddiddd_ini', null, ['class' => 'form-control']) !!}
</div>

<!-- Def Ddiddd Fim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('def_ddiddd_fim', __('models/definepstn.fields.def_ddiddd_fim').':') !!}
    {!! Form::text('def_ddiddd_fim', null, ['class' => 'form-control']) !!}
</div>

<!-- Def Terminacao1 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('def_terminacao1_id', __('models/definepstn.fields.def_terminacao1_id').':') !!}
    {!! Form::number('def_terminacao1_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Def Terminacao2 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('def_terminacao2_id', __('models/definepstn.fields.def_terminacao2_id').':') !!}
    {!! Form::number('def_terminacao2_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Def Terminacao3 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('def_terminacao3_id', __('models/definepstn.fields.def_terminacao3_id').':') !!}
    {!! Form::number('def_terminacao3_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Def Terminacao4 Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('def_terminacao4_id', __('models/definepstn.fields.def_terminacao4_id').':') !!}
    {!! Form::number('def_terminacao4_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('definePstns.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

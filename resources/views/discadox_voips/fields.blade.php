<!-- Dis Numerodiscado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dis_numerodiscado', __('models/discadoxvoip.fields.dis_numerodiscado').':') !!}
    {!! Form::text('dis_numerodiscado', null, ['class' => 'form-control']) !!}
</div>

<!-- Dis Login Voip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dis_login_voip', __('models/discadoxvoip.fields.dis_login_voip').':') !!}
    {!! Form::text('dis_login_voip', null, ['class' => 'form-control']) !!}
</div>

<!-- Dis Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dis_representante_id', __('models/discadoxvoip.fields.dis_representante_id').':') !!}
    {!! Form::number('dis_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Dis Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dis_fornecedor_id', __('models/discadoxvoip.fields.dis_fornecedor_id').':') !!}
    {!! Form::number('dis_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('discadoxVoips.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

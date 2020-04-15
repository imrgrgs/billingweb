<!-- Opr Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('opr_id', __('models/operadoras.fields.opr_id').':') !!}
    {!! Form::number('opr_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Opr Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('opr_nome', __('models/operadoras.fields.opr_nome').':') !!}
    {!! Form::text('opr_nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('operadoras.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

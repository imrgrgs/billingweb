<!-- Crd Saldo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('crd_saldo', __('models/creditos.fields.crd_saldo').':') !!}
    {!! Form::number('crd_saldo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('creditos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

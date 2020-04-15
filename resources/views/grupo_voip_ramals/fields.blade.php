<!-- Grv Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grv_id', __('models/gruposvoipramal.fields.grv_id').':') !!}
    {!! Form::number('grv_id', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('user_id', __('models/gruposvoipramal.fields.user_id').':') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('grupoVoipRamals.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

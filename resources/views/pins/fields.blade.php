<!-- Pin Number Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pin_number', __('models/pins.fields.pin_number').':') !!}
    {!! Form::number('pin_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Pin Plataforma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pin_plataforma', __('models/pins.fields.pin_plataforma').':') !!}
    {!! Form::text('pin_plataforma', null, ['class' => 'form-control']) !!}
</div>

<!-- Pin User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pin_user_id', __('models/pins.fields.pin_user_id').':') !!}
    {!! Form::number('pin_user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('pins.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

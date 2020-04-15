<!-- Pin Number Field -->
<div class="form-group">
    {!! Form::label('pin_number', __('models/pins.fields.pin_number').':') !!}
    <p>{{ $pin->pin_number }}</p>
</div>

<!-- Pin Plataforma Field -->
<div class="form-group">
    {!! Form::label('pin_plataforma', __('models/pins.fields.pin_plataforma').':') !!}
    <p>{{ $pin->pin_plataforma }}</p>
</div>

<!-- Pin User Id Field -->
<div class="form-group">
    {!! Form::label('pin_user_id', __('models/pins.fields.pin_user_id').':') !!}
    <p>{{ $pin->pin_user_id }}</p>
</div>


<!-- Fne Telefone Field -->
<div class="form-group">
    {!! Form::label('fne_telefone', __('models/fonesusers.fields.fne_telefone').':') !!}
    <p>{{ $fonesUser->fne_telefone }}</p>
</div>

<!-- Fne User Id Field -->
<div class="form-group">
    {!! Form::label('fne_user_id', __('models/fonesusers.fields.fne_user_id').':') !!}
    <p>{{ $fonesUser->fne_user_id }}</p>
</div>

<!-- Retornar Callingcard Field -->
<div class="form-group">
    {!! Form::label('retornar_callingcard', __('models/fonesusers.fields.retornar_callingcard').':') !!}
    <p>{{ $fonesUser->retornar_callingcard }}</p>
</div>


<!-- Fne Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fne_telefone', __('models/fonesusers.fields.fne_telefone').':') !!}
    {!! Form::text('fne_telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- Fne User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fne_user_id', __('models/fonesusers.fields.fne_user_id').':') !!}
    {!! Form::number('fne_user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Retornar Callingcard Field -->
<div class="form-group col-sm-6">
    {!! Form::label('retornar_callingcard', __('models/fonesusers.fields.retornar_callingcard').':') !!}
    {!! Form::text('retornar_callingcard', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('fonesUsers.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

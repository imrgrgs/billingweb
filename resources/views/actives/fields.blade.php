<!-- Act Origem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('act_origem', __('models/active.fields.act_origem').':') !!}
    {!! Form::text('act_origem', null, ['class' => 'form-control']) !!}
</div>

<!-- Act Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('act_destino', __('models/active.fields.act_destino').':') !!}
    {!! Form::text('act_destino', null, ['class' => 'form-control']) !!}
</div>

<!-- Act Usuario Field -->
<div class="form-group col-sm-6">
    {!! Form::label('act_usuario', __('models/active.fields.act_usuario').':') !!}
    {!! Form::text('act_usuario', null, ['class' => 'form-control']) !!}
</div>

<!-- Act Contexto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('act_contexto', __('models/active.fields.act_contexto').':') !!}
    {!! Form::text('act_contexto', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('actives.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

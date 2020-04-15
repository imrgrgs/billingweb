<!-- Fonesrestricao User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fonesrestricao_user_id', __('models/FonesRestricao.fields.fonesrestricao_user_id').':') !!}
    {!! Form::number('fonesrestricao_user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Fonesrestricao Telefone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('fonesrestricao_telefone', __('models/FonesRestricao.fields.fonesrestricao_telefone').':') !!}
    {!! Form::text('fonesrestricao_telefone', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('fonesRestricaos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

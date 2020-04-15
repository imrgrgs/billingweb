<!-- Gru Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gru_id', __('models/grupouradesvio.fields.gru_id').':') !!}
    {!! Form::number('gru_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Grudesvio Digito Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grudesvio_digito', __('models/grupouradesvio.fields.grudesvio_digito').':') !!}
    {!! Form::text('grudesvio_digito', null, ['class' => 'form-control']) !!}
</div>

<!-- Grudesvio Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grudesvio_nome', __('models/grupouradesvio.fields.grudesvio_nome').':') !!}
    {!! Form::text('grudesvio_nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Grudesvio Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grudesvio_tipo', __('models/grupouradesvio.fields.grudesvio_tipo').':') !!}
    {!! Form::text('grudesvio_tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Grudesvio Chamar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('grudesvio_chamar', __('models/grupouradesvio.fields.grudesvio_chamar').':') !!}
    {!! Form::number('grudesvio_chamar', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('grupoUraDesvios.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

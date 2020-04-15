<!-- Tbe Fonecode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tbe_fonecode', __('models/tabespa_181.fields.tbe_fonecode').':') !!}
    {!! Form::text('tbe_fonecode', null, ['class' => 'form-control']) !!}
</div>

<!-- Tbe Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tbe_descricao', __('models/tabespa_181.fields.tbe_descricao').':') !!}
    {!! Form::text('tbe_descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Tbe Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tbe_tipo', __('models/tabespa_181.fields.tbe_tipo').':') !!}
    {!! Form::text('tbe_tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Tbe Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tbe_valor', __('models/tabespa_181.fields.tbe_valor').':') !!}
    {!! Form::number('tbe_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Tbe Vlr Feriado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tbe_vlr_feriado', __('models/tabespa_181.fields.tbe_vlr_feriado').':') !!}
    {!! Form::number('tbe_vlr_feriado', null, ['class' => 'form-control']) !!}
</div>

<!-- Tbe Vlr Domingo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tbe_vlr_domingo', __('models/tabespa_181.fields.tbe_vlr_domingo').':') !!}
    {!! Form::number('tbe_vlr_domingo', null, ['class' => 'form-control']) !!}
</div>

<!-- Tbe Hrini Ss Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tbe_hrini_ss', __('models/tabespa_181.fields.tbe_hrini_ss').':') !!}
    {!! Form::text('tbe_hrini_ss', null, ['class' => 'form-control']) !!}
</div>

<!-- Tbe Hrfim Ss Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tbe_hrfim_ss', __('models/tabespa_181.fields.tbe_hrfim_ss').':') !!}
    {!! Form::text('tbe_hrfim_ss', null, ['class' => 'form-control']) !!}
</div>

<!-- Tbe Vlr Ss Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tbe_vlr_ss', __('models/tabespa_181.fields.tbe_vlr_ss').':') !!}
    {!! Form::number('tbe_vlr_ss', null, ['class' => 'form-control']) !!}
</div>

<!-- Tbe Hrini Sabado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tbe_hrini_sabado', __('models/tabespa_181.fields.tbe_hrini_sabado').':') !!}
    {!! Form::text('tbe_hrini_sabado', null, ['class' => 'form-control']) !!}
</div>

<!-- Tbe Hrfim Sabado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tbe_hrfim_sabado', __('models/tabespa_181.fields.tbe_hrfim_sabado').':') !!}
    {!! Form::text('tbe_hrfim_sabado', null, ['class' => 'form-control']) !!}
</div>

<!-- Tbe Vlr Sabado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tbe_vlr_sabado', __('models/tabespa_181.fields.tbe_vlr_sabado').':') !!}
    {!! Form::number('tbe_vlr_sabado', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tabEspAs.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

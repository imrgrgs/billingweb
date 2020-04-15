<!-- Prg Codigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prg_codigo', __('models/programas.fields.prg_codigo').':') !!}
    {!! Form::text('prg_codigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Prg Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prg_descricao', __('models/programas.fields.prg_descricao').':') !!}
    {!! Form::text('prg_descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Prg Menu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('prg_menu', __('models/programas.fields.prg_menu').':') !!}
    {!! Form::text('prg_menu', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('programas.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

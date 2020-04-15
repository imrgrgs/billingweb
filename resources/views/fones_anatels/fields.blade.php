<!-- Anal Sigla Uf Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anal_sigla_uf', __('models/fonesanatel.fields.anal_sigla_uf').':') !!}
    {!! Form::text('anal_sigla_uf', null, ['class' => 'form-control']) !!}
</div>

<!-- Anal Sigla Cnl Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anal_sigla_cnl', __('models/fonesanatel.fields.anal_sigla_cnl').':') !!}
    {!! Form::text('anal_sigla_cnl', null, ['class' => 'form-control']) !!}
</div>

<!-- Anal Codigo Cnl Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anal_codigo_cnl', __('models/fonesanatel.fields.anal_codigo_cnl').':') !!}
    {!! Form::text('anal_codigo_cnl', null, ['class' => 'form-control']) !!}
</div>

<!-- Anal Localidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anal_localidade', __('models/fonesanatel.fields.anal_localidade').':') !!}
    {!! Form::text('anal_localidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Anal Municipio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anal_municipio', __('models/fonesanatel.fields.anal_municipio').':') !!}
    {!! Form::text('anal_municipio', null, ['class' => 'form-control']) !!}
</div>

<!-- Anal Codigo Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anal_codigo_area', __('models/fonesanatel.fields.anal_codigo_area').':') !!}
    {!! Form::text('anal_codigo_area', null, ['class' => 'form-control']) !!}
</div>

<!-- Anal Prefixo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anal_prefixo', __('models/fonesanatel.fields.anal_prefixo').':') !!}
    {!! Form::text('anal_prefixo', null, ['class' => 'form-control']) !!}
</div>

<!-- Anal Prestadora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anal_prestadora', __('models/fonesanatel.fields.anal_prestadora').':') !!}
    {!! Form::text('anal_prestadora', null, ['class' => 'form-control']) !!}
</div>

<!-- Anal Faixa Ini Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anal_faixa_ini', __('models/fonesanatel.fields.anal_faixa_ini').':') !!}
    {!! Form::text('anal_faixa_ini', null, ['class' => 'form-control']) !!}
</div>

<!-- Anal Faixa Fim Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anal_faixa_fim', __('models/fonesanatel.fields.anal_faixa_fim').':') !!}
    {!! Form::text('anal_faixa_fim', null, ['class' => 'form-control']) !!}
</div>

<!-- Anal Latitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anal_latitude', __('models/fonesanatel.fields.anal_latitude').':') !!}
    {!! Form::text('anal_latitude', null, ['class' => 'form-control']) !!}
</div>

<!-- Anal Hemisferio Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anal_hemisferio', __('models/fonesanatel.fields.anal_hemisferio').':') !!}
    {!! Form::text('anal_hemisferio', null, ['class' => 'form-control']) !!}
</div>

<!-- Anal Longitude Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anal_longitude', __('models/fonesanatel.fields.anal_longitude').':') !!}
    {!! Form::text('anal_longitude', null, ['class' => 'form-control']) !!}
</div>

<!-- Anal Sigla Cnl Local Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anal_sigla_cnl_local', __('models/fonesanatel.fields.anal_sigla_cnl_local').':') !!}
    {!! Form::text('anal_sigla_cnl_local', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('fonesAnatels.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

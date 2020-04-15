<!-- Ppm Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ppm_id', __('models/publicidadeparam.fields.ppm_id').':') !!}
    {!! Form::number('ppm_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ppm Qtd Simult Noite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ppm_qtd_simult_noite', __('models/publicidadeparam.fields.ppm_qtd_simult_noite').':') !!}
    {!! Form::number('ppm_qtd_simult_noite', null, ['class' => 'form-control']) !!}
</div>

<!-- Ppm Qtd Simult Dia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ppm_qtd_simult_dia', __('models/publicidadeparam.fields.ppm_qtd_simult_dia').':') !!}
    {!! Form::number('ppm_qtd_simult_dia', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('publicidadeParams.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

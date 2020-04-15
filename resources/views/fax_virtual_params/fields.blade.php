<!-- Pfv Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pfv_id', __('models/faxvirtualparam.fields.pfv_id').':') !!}
    {!! Form::number('pfv_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Pfv Qtd Simult Noite Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pfv_qtd_simult_noite', __('models/faxvirtualparam.fields.pfv_qtd_simult_noite').':') !!}
    {!! Form::number('pfv_qtd_simult_noite', null, ['class' => 'form-control']) !!}
</div>

<!-- Pfv Qtd Simult Dia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pfv_qtd_simult_dia', __('models/faxvirtualparam.fields.pfv_qtd_simult_dia').':') !!}
    {!! Form::number('pfv_qtd_simult_dia', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('faxVirtualParams.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

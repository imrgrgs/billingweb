<!-- Pub Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pub_id', __('models/publicidadeaudios.fields.pub_id').':') !!}
    {!! Form::number('pub_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Pbaud Seq Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pbaud_seq', __('models/publicidadeaudios.fields.pbaud_seq').':') !!}
    {!! Form::number('pbaud_seq', null, ['class' => 'form-control']) !!}
</div>

<!-- Pbaud Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pbaud_descricao', __('models/publicidadeaudios.fields.pbaud_descricao').':') !!}
    {!! Form::text('pbaud_descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Pbaud Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pbaud_status', __('models/publicidadeaudios.fields.pbaud_status').':') !!}
    {!! Form::text('pbaud_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Pbaud Gingle Wav Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pbaud_gingle_wav', __('models/publicidadeaudios.fields.pbaud_gingle_wav').':') !!}
    {!! Form::text('pbaud_gingle_wav', null, ['class' => 'form-control']) !!}
</div>

<!-- Pbaud Tempo Gingle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pbaud_tempo_gingle', __('models/publicidadeaudios.fields.pbaud_tempo_gingle').':') !!}
    {!! Form::number('pbaud_tempo_gingle', null, ['class' => 'form-control']) !!}
</div>

<!-- Pbaud Checar Satisfacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pbaud_checar_satisfacao', __('models/publicidadeaudios.fields.pbaud_checar_satisfacao').':') !!}
    {!! Form::text('pbaud_checar_satisfacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Pbaud Desvio Tipo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pbaud_desvio_tipo', __('models/publicidadeaudios.fields.pbaud_desvio_tipo').':') !!}
    {!! Form::text('pbaud_desvio_tipo', null, ['class' => 'form-control']) !!}
</div>

<!-- Pbaud Desvio Chamar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pbaud_desvio_chamar', __('models/publicidadeaudios.fields.pbaud_desvio_chamar').':') !!}
    {!! Form::number('pbaud_desvio_chamar', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('publicidadeAudios.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

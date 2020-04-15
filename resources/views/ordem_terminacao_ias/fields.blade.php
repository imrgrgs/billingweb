<!-- Oia Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('oia_fornecedor_id', __('models/ordemterminacoes_ia.fields.oia_fornecedor_id').':') !!}
    {!! Form::number('oia_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Oia Terminacao Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('oia_terminacao_id', __('models/ordemterminacoes_ia.fields.oia_terminacao_id').':') !!}
    {!! Form::number('oia_terminacao_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Oia Ddd Field -->
<div class="form-group col-sm-6">
    {!! Form::label('oia_ddd', __('models/ordemterminacoes_ia.fields.oia_ddd').':') !!}
    {!! Form::text('oia_ddd', null, ['class' => 'form-control']) !!}
</div>

<!-- Oia Tempo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('oia_tempo', __('models/ordemterminacoes_ia.fields.oia_tempo').':') !!}
    {!! Form::number('oia_tempo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ordemTerminacaoIas.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

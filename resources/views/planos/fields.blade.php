<!-- Pln Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pln_descricao', __('models/planos.fields.pln_descricao').':') !!}
    {!! Form::text('pln_descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Pln Adesao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pln_adesao', __('models/planos.fields.pln_adesao').':') !!}
    {!! Form::number('pln_adesao', null, ['class' => 'form-control']) !!}
</div>

<!-- Pln Mensalidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pln_mensalidade', __('models/planos.fields.pln_mensalidade').':') !!}
    {!! Form::number('pln_mensalidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Pln Limite Fixo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pln_limite_fixo', __('models/planos.fields.pln_limite_fixo').':') !!}
    {!! Form::number('pln_limite_fixo', null, ['class' => 'form-control']) !!}
</div>

<!-- Pln Limite Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pln_limite_celular', __('models/planos.fields.pln_limite_celular').':') !!}
    {!! Form::number('pln_limite_celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Pln Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pln_status', __('models/planos.fields.pln_status').':') !!}
    {!! Form::text('pln_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Pln Detalhes Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('pln_detalhes', __('models/planos.fields.pln_detalhes').':') !!}
    {!! Form::textarea('pln_detalhes', null, ['class' => 'form-control']) !!}
</div>
@push('scripts')
    <script type="text/javascript">
        CKEDITOR.replace('pln_detalhes', {
          language: '{{ strtolower(config('app.locale')) }}',
          height: '150px',
        })
    </script>
@endpush


<!-- Pln Geral Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('pln_geral', __('models/planos.fields.pln_geral').':') !!}
    {!! Form::textarea('pln_geral', null, ['class' => 'form-control']) !!}
</div>
@push('scripts')
    <script type="text/javascript">
        CKEDITOR.replace('pln_geral', {
          language: '{{ strtolower(config('app.locale')) }}',
          height: '150px',
        })
    </script>
@endpush


<!-- Pln Imagem1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pln_imagem1', __('models/planos.fields.pln_imagem1').':') !!}
    {!! Form::text('pln_imagem1', null, ['class' => 'form-control']) !!}
</div>

<!-- Pln Imagem2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pln_imagem2', __('models/planos.fields.pln_imagem2').':') !!}
    {!! Form::text('pln_imagem2', null, ['class' => 'form-control']) !!}
</div>

<!-- Pln Imagem3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pln_imagem3', __('models/planos.fields.pln_imagem3').':') !!}
    {!! Form::text('pln_imagem3', null, ['class' => 'form-control']) !!}
</div>

<!-- Pln Extensao1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pln_extensao1', __('models/planos.fields.pln_extensao1').':') !!}
    {!! Form::text('pln_extensao1', null, ['class' => 'form-control']) !!}
</div>

<!-- Pln Extensao2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pln_extensao2', __('models/planos.fields.pln_extensao2').':') !!}
    {!! Form::text('pln_extensao2', null, ['class' => 'form-control']) !!}
</div>

<!-- Pln Extensao3 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pln_extensao3', __('models/planos.fields.pln_extensao3').':') !!}
    {!! Form::text('pln_extensao3', null, ['class' => 'form-control']) !!}
</div>

<!-- Pln Vlrfixo Excedente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pln_vlrfixo_excedente', __('models/planos.fields.pln_vlrfixo_excedente').':') !!}
    {!! Form::number('pln_vlrfixo_excedente', null, ['class' => 'form-control']) !!}
</div>

<!-- Pln Vlrcel Excedente Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pln_vlrcel_excedente', __('models/planos.fields.pln_vlrcel_excedente').':') !!}
    {!! Form::number('pln_vlrcel_excedente', null, ['class' => 'form-control']) !!}
</div>

<!-- Pln Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pln_representante_id', __('models/planos.fields.pln_representante_id').':') !!}
    {!! Form::number('pln_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Pln Sem Limites Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pln_sem_limites', __('models/planos.fields.pln_sem_limites').':') !!}
    {!! Form::text('pln_sem_limites', null, ['class' => 'form-control']) !!}
</div>

<!-- Pln Bloquear Atingiu Franquia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pln_bloquear_atingiu_franquia', __('models/planos.fields.pln_bloquear_atingiu_franquia').':') !!}
    {!! Form::text('pln_bloquear_atingiu_franquia', null, ['class' => 'form-control']) !!}
</div>

<!-- Pln Tabespecial Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('pln_tabespecial_id', __('models/planos.fields.pln_tabespecial_id').':') !!}
    {!! Form::number('pln_tabespecial_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('planos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

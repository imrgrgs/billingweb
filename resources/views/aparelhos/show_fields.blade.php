<!-- Apa Descricao Field -->
<div class="form-group">
    {!! Form::label('apa_descricao', __('models/aparelhos.fields.apa_descricao').':') !!}
    <p>{{ $aparelho->apa_descricao }}</p>
</div>

<!-- Apa Valor Field -->
<div class="form-group">
    {!! Form::label('apa_valor', __('models/aparelhos.fields.apa_valor').':') !!}
    <p>{{ $aparelho->apa_valor }}</p>
</div>

<!-- Apa Fornecedor Id Field -->
<div class="form-group">
    {!! Form::label('apa_fornecedor_id', __('models/aparelhos.fields.apa_fornecedor_id').':') !!}
    <p>{{ $aparelho->apa_fornecedor_id }}</p>
</div>


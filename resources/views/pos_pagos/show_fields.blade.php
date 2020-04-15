<!-- Pos Plano Id Field -->
<div class="form-group">
    {!! Form::label('pos_plano_id', __('models/pospagos.fields.pos_plano_id').':') !!}
    <p>{{ $posPago->pos_plano_id }}</p>
</div>

<!-- Pos Data Contrato Field -->
<div class="form-group">
    {!! Form::label('pos_data_contrato', __('models/pospagos.fields.pos_data_contrato').':') !!}
    <p>{{ $posPago->pos_data_contrato }}</p>
</div>

<!-- Pos Utilizado Fixo Field -->
<div class="form-group">
    {!! Form::label('pos_utilizado_fixo', __('models/pospagos.fields.pos_utilizado_fixo').':') !!}
    <p>{{ $posPago->pos_utilizado_fixo }}</p>
</div>

<!-- Pos Utilizado Celular Field -->
<div class="form-group">
    {!! Form::label('pos_utilizado_celular', __('models/pospagos.fields.pos_utilizado_celular').':') !!}
    <p>{{ $posPago->pos_utilizado_celular }}</p>
</div>

<!-- Pos Dia Zerar Field -->
<div class="form-group">
    {!! Form::label('pos_dia_zerar', __('models/pospagos.fields.pos_dia_zerar').':') !!}
    <p>{{ $posPago->pos_dia_zerar }}</p>
</div>


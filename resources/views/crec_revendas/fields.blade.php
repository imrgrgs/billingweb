<!-- Rrv Nrodoc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rrv_nrodoc', __('models/crecrevenda.fields.rrv_nrodoc').':') !!}
    {!! Form::text('rrv_nrodoc', null, ['class' => 'form-control']) !!}
</div>

<!-- Rrv Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rrv_cliente_id', __('models/crecrevenda.fields.rrv_cliente_id').':') !!}
    {!! Form::number('rrv_cliente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Rrv Dtvencto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rrv_dtvencto', __('models/crecrevenda.fields.rrv_dtvencto').':') !!}
    {!! Form::text('rrv_dtvencto', null, ['class' => 'form-control','id'=>'rrv_dtvencto']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#rrv_dtvencto').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Rrv Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rrv_valor', __('models/crecrevenda.fields.rrv_valor').':') !!}
    {!! Form::number('rrv_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Rrv Nrparcela Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rrv_nrparcela', __('models/crecrevenda.fields.rrv_nrparcela').':') !!}
    {!! Form::text('rrv_nrparcela', null, ['class' => 'form-control']) !!}
</div>

<!-- Rrv Historico Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('rrv_historico', __('models/crecrevenda.fields.rrv_historico').':') !!}
    {!! Form::textarea('rrv_historico', null, ['class' => 'form-control']) !!}
</div>
@push('scripts')
    <script type="text/javascript">
        CKEDITOR.replace('rrv_historico', {
          language: '{{ strtolower(config('app.locale')) }}',
          height: '150px',
        })
    </script>
@endpush


<!-- Rrv Dtpagto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rrv_dtpagto', __('models/crecrevenda.fields.rrv_dtpagto').':') !!}
    {!! Form::text('rrv_dtpagto', null, ['class' => 'form-control','id'=>'rrv_dtpagto']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#rrv_dtpagto').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Rrv Desconto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rrv_desconto', __('models/crecrevenda.fields.rrv_desconto').':') !!}
    {!! Form::number('rrv_desconto', null, ['class' => 'form-control']) !!}
</div>

<!-- Rrv Acrescimo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rrv_acrescimo', __('models/crecrevenda.fields.rrv_acrescimo').':') !!}
    {!! Form::number('rrv_acrescimo', null, ['class' => 'form-control']) !!}
</div>

<!-- Rrv Dtreprogramada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rrv_dtreprogramada', __('models/crecrevenda.fields.rrv_dtreprogramada').':') !!}
    {!! Form::text('rrv_dtreprogramada', null, ['class' => 'form-control','id'=>'rrv_dtreprogramada']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#rrv_dtreprogramada').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Rrv Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rrv_status', __('models/crecrevenda.fields.rrv_status').':') !!}
    {!! Form::text('rrv_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Rrv Forma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rrv_forma', __('models/crecrevenda.fields.rrv_forma').':') !!}
    {!! Form::text('rrv_forma', null, ['class' => 'form-control']) !!}
</div>

<!-- Rrv Nrdocpgto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rrv_nrdocpgto', __('models/crecrevenda.fields.rrv_nrdocpgto').':') !!}
    {!! Form::text('rrv_nrdocpgto', null, ['class' => 'form-control']) !!}
</div>

<!-- Rrv Planocontas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rrv_planocontas_id', __('models/crecrevenda.fields.rrv_planocontas_id').':') !!}
    {!! Form::number('rrv_planocontas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Rrv Bancos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rrv_bancos_id', __('models/crecrevenda.fields.rrv_bancos_id').':') !!}
    {!! Form::number('rrv_bancos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Rrv Previsao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rrv_previsao', __('models/crecrevenda.fields.rrv_previsao').':') !!}
    {!! Form::text('rrv_previsao', null, ['class' => 'form-control']) !!}
</div>

<!-- Rrv Empresa Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rrv_empresa_id', __('models/crecrevenda.fields.rrv_empresa_id').':') !!}
    {!! Form::number('rrv_empresa_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Rrv Nossonumero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rrv_nossonumero', __('models/crecrevenda.fields.rrv_nossonumero').':') !!}
    {!! Form::text('rrv_nossonumero', null, ['class' => 'form-control']) !!}
</div>

<!-- Rrv Dtemissao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rrv_dtemissao', __('models/crecrevenda.fields.rrv_dtemissao').':') !!}
    {!! Form::text('rrv_dtemissao', null, ['class' => 'form-control','id'=>'rrv_dtemissao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#rrv_dtemissao').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Rrv Dtefetivacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rrv_dtefetivacao', __('models/crecrevenda.fields.rrv_dtefetivacao').':') !!}
    {!! Form::text('rrv_dtefetivacao', null, ['class' => 'form-control','id'=>'rrv_dtefetivacao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#rrv_dtefetivacao').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('crecRevendas.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

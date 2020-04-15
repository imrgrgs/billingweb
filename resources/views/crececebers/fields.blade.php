<!-- Rec Nrodoc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rec_nrodoc', __('models/creceber.fields.rec_nrodoc').':') !!}
    {!! Form::text('rec_nrodoc', null, ['class' => 'form-control']) !!}
</div>

<!-- Rec Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rec_cliente_id', __('models/creceber.fields.rec_cliente_id').':') !!}
    {!! Form::number('rec_cliente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Rec Dtvencto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rec_dtvencto', __('models/creceber.fields.rec_dtvencto').':') !!}
    {!! Form::text('rec_dtvencto', null, ['class' => 'form-control','id'=>'rec_dtvencto']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#rec_dtvencto').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Rec Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rec_valor', __('models/creceber.fields.rec_valor').':') !!}
    {!! Form::number('rec_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Rec Nrparcela Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rec_nrparcela', __('models/creceber.fields.rec_nrparcela').':') !!}
    {!! Form::text('rec_nrparcela', null, ['class' => 'form-control']) !!}
</div>

<!-- Rec Historico Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('rec_historico', __('models/creceber.fields.rec_historico').':') !!}
    {!! Form::textarea('rec_historico', null, ['class' => 'form-control']) !!}
</div>
@push('scripts')
    <script type="text/javascript">
        CKEDITOR.replace('rec_historico', {
          language: '{{ strtolower(config('app.locale')) }}',
          height: '150px',
        })
    </script>
@endpush


<!-- Rec Dtpagto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rec_dtpagto', __('models/creceber.fields.rec_dtpagto').':') !!}
    {!! Form::text('rec_dtpagto', null, ['class' => 'form-control','id'=>'rec_dtpagto']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#rec_dtpagto').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Rec Desconto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rec_desconto', __('models/creceber.fields.rec_desconto').':') !!}
    {!! Form::number('rec_desconto', null, ['class' => 'form-control']) !!}
</div>

<!-- Rec Acrescimo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rec_acrescimo', __('models/creceber.fields.rec_acrescimo').':') !!}
    {!! Form::number('rec_acrescimo', null, ['class' => 'form-control']) !!}
</div>

<!-- Rec Dtreprogramada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rec_dtreprogramada', __('models/creceber.fields.rec_dtreprogramada').':') !!}
    {!! Form::text('rec_dtreprogramada', null, ['class' => 'form-control','id'=>'rec_dtreprogramada']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#rec_dtreprogramada').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Rec Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rec_status', __('models/creceber.fields.rec_status').':') !!}
    {!! Form::text('rec_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Rec Forma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rec_forma', __('models/creceber.fields.rec_forma').':') !!}
    {!! Form::text('rec_forma', null, ['class' => 'form-control']) !!}
</div>

<!-- Rec Nrdocpgto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rec_nrdocpgto', __('models/creceber.fields.rec_nrdocpgto').':') !!}
    {!! Form::text('rec_nrdocpgto', null, ['class' => 'form-control']) !!}
</div>

<!-- Rec Planocontas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rec_planocontas_id', __('models/creceber.fields.rec_planocontas_id').':') !!}
    {!! Form::number('rec_planocontas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Rec Bancos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rec_bancos_id', __('models/creceber.fields.rec_bancos_id').':') !!}
    {!! Form::number('rec_bancos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Rec Previsao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rec_previsao', __('models/creceber.fields.rec_previsao').':') !!}
    {!! Form::text('rec_previsao', null, ['class' => 'form-control']) !!}
</div>

<!-- Rec Empresa Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rec_empresa_id', __('models/creceber.fields.rec_empresa_id').':') !!}
    {!! Form::number('rec_empresa_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Rec Nossonumero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rec_nossonumero', __('models/creceber.fields.rec_nossonumero').':') !!}
    {!! Form::text('rec_nossonumero', null, ['class' => 'form-control']) !!}
</div>

<!-- Rec Dtemissao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rec_dtemissao', __('models/creceber.fields.rec_dtemissao').':') !!}
    {!! Form::text('rec_dtemissao', null, ['class' => 'form-control','id'=>'rec_dtemissao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#rec_dtemissao').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Rec Dtefetivacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rec_dtefetivacao', __('models/creceber.fields.rec_dtefetivacao').':') !!}
    {!! Form::text('rec_dtefetivacao', null, ['class' => 'form-control','id'=>'rec_dtefetivacao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#rec_dtefetivacao').datepicker({
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
    <a href="{{ route('crececebers.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

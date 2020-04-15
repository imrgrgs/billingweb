<!-- Ram Nrodoc Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ram_nrodoc', __('models/crecmaster.fields.ram_nrodoc').':') !!}
    {!! Form::text('ram_nrodoc', null, ['class' => 'form-control']) !!}
</div>

<!-- Ram Cliente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ram_cliente_id', __('models/crecmaster.fields.ram_cliente_id').':') !!}
    {!! Form::number('ram_cliente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ram Dtvencto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ram_dtvencto', __('models/crecmaster.fields.ram_dtvencto').':') !!}
    {!! Form::text('ram_dtvencto', null, ['class' => 'form-control','id'=>'ram_dtvencto']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#ram_dtvencto').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Ram Valor Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ram_valor', __('models/crecmaster.fields.ram_valor').':') !!}
    {!! Form::number('ram_valor', null, ['class' => 'form-control']) !!}
</div>

<!-- Ram Nrparcela Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ram_nrparcela', __('models/crecmaster.fields.ram_nrparcela').':') !!}
    {!! Form::text('ram_nrparcela', null, ['class' => 'form-control']) !!}
</div>

<!-- Ram Historico Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('ram_historico', __('models/crecmaster.fields.ram_historico').':') !!}
    {!! Form::textarea('ram_historico', null, ['class' => 'form-control']) !!}
</div>
@push('scripts')
    <script type="text/javascript">
        CKEDITOR.replace('ram_historico', {
          language: '{{ strtolower(config('app.locale')) }}',
          height: '150px',
        })
    </script>
@endpush


<!-- Ram Dtpagto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ram_dtpagto', __('models/crecmaster.fields.ram_dtpagto').':') !!}
    {!! Form::text('ram_dtpagto', null, ['class' => 'form-control','id'=>'ram_dtpagto']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#ram_dtpagto').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Ram Desconto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ram_desconto', __('models/crecmaster.fields.ram_desconto').':') !!}
    {!! Form::number('ram_desconto', null, ['class' => 'form-control']) !!}
</div>

<!-- Ram Acrescimo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ram_acrescimo', __('models/crecmaster.fields.ram_acrescimo').':') !!}
    {!! Form::number('ram_acrescimo', null, ['class' => 'form-control']) !!}
</div>

<!-- Ram Dtreprogramada Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ram_dtreprogramada', __('models/crecmaster.fields.ram_dtreprogramada').':') !!}
    {!! Form::text('ram_dtreprogramada', null, ['class' => 'form-control','id'=>'ram_dtreprogramada']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#ram_dtreprogramada').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Ram Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ram_status', __('models/crecmaster.fields.ram_status').':') !!}
    {!! Form::text('ram_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Ram Forma Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ram_forma', __('models/crecmaster.fields.ram_forma').':') !!}
    {!! Form::text('ram_forma', null, ['class' => 'form-control']) !!}
</div>

<!-- Ram Nrdocpgto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ram_nrdocpgto', __('models/crecmaster.fields.ram_nrdocpgto').':') !!}
    {!! Form::text('ram_nrdocpgto', null, ['class' => 'form-control']) !!}
</div>

<!-- Ram Planocontas Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ram_planocontas_id', __('models/crecmaster.fields.ram_planocontas_id').':') !!}
    {!! Form::number('ram_planocontas_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ram Bancos Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ram_bancos_id', __('models/crecmaster.fields.ram_bancos_id').':') !!}
    {!! Form::number('ram_bancos_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ram Previsao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ram_previsao', __('models/crecmaster.fields.ram_previsao').':') !!}
    {!! Form::text('ram_previsao', null, ['class' => 'form-control']) !!}
</div>

<!-- Ram Empresa Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ram_empresa_id', __('models/crecmaster.fields.ram_empresa_id').':') !!}
    {!! Form::number('ram_empresa_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Ram Nossonumero Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ram_nossonumero', __('models/crecmaster.fields.ram_nossonumero').':') !!}
    {!! Form::text('ram_nossonumero', null, ['class' => 'form-control']) !!}
</div>

<!-- Ram Dtemissao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ram_dtemissao', __('models/crecmaster.fields.ram_dtemissao').':') !!}
    {!! Form::text('ram_dtemissao', null, ['class' => 'form-control','id'=>'ram_dtemissao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#ram_dtemissao').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Ram Dtefetivacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ram_dtefetivacao', __('models/crecmaster.fields.ram_dtefetivacao').':') !!}
    {!! Form::text('ram_dtefetivacao', null, ['class' => 'form-control','id'=>'ram_dtefetivacao']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#ram_dtefetivacao').datepicker({
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
    <a href="{{ route('crecMasters.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

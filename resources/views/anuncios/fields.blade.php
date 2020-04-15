<!-- Anu Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anu_descricao', __('models/anuncios.fields.anu_descricao').':') !!}
    {!! Form::text('anu_descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Anu Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anu_status', __('models/anuncios.fields.anu_status').':') !!}
    {!! Form::text('anu_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Anu Gingle Wav Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anu_gingle_wav', __('models/anuncios.fields.anu_gingle_wav').':') !!}
    {!! Form::text('anu_gingle_wav', null, ['class' => 'form-control']) !!}
</div>

<!-- Anu Endereco Gingle Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anu_endereco_gingle', __('models/anuncios.fields.anu_endereco_gingle').':') !!}
    {!! Form::text('anu_endereco_gingle', null, ['class' => 'form-control']) !!}
</div>

<!-- Anu Qtde Tocar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anu_qtde_tocar', __('models/anuncios.fields.anu_qtde_tocar').':') !!}
    {!! Form::number('anu_qtde_tocar', null, ['class' => 'form-control']) !!}
</div>

<!-- Anu Qtde Tocado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anu_qtde_tocado', __('models/anuncios.fields.anu_qtde_tocado').':') !!}
    {!! Form::number('anu_qtde_tocado', null, ['class' => 'form-control']) !!}
</div>

<!-- Anu Data Tocado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anu_data_tocado', __('models/anuncios.fields.anu_data_tocado').':') !!}
    {!! Form::text('anu_data_tocado', null, ['class' => 'form-control','id'=>'anu_data_tocado']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#anu_data_tocado').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Anu Hora Tocado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anu_hora_tocado', __('models/anuncios.fields.anu_hora_tocado').':') !!}
    {!! Form::text('anu_hora_tocado', null, ['class' => 'form-control']) !!}
</div>

<!-- Anu Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anu_representante_id', __('models/anuncios.fields.anu_representante_id').':') !!}
    {!! Form::number('anu_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Anu Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('anu_fornecedor_id', __('models/anuncios.fields.anu_fornecedor_id').':') !!}
    {!! Form::number('anu_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('anuncios.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

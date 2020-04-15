<!-- Adm Razao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_razao', __('models/admin.fields.adm_razao').':') !!}
    {!! Form::text('adm_razao', null, ['class' => 'form-control']) !!}
</div>

<!-- Adm Cnpj Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_cnpj', __('models/admin.fields.adm_cnpj').':') !!}
    {!! Form::text('adm_cnpj', null, ['class' => 'form-control']) !!}
</div>

<!-- Adm Inscrest Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_inscrest', __('models/admin.fields.adm_inscrest').':') !!}
    {!! Form::text('adm_inscrest', null, ['class' => 'form-control']) !!}
</div>

<!-- Adm Fantasia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_fantasia', __('models/admin.fields.adm_fantasia').':') !!}
    {!! Form::text('adm_fantasia', null, ['class' => 'form-control']) !!}
</div>

<!-- Adm Rua Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_rua', __('models/admin.fields.adm_rua').':') !!}
    {!! Form::text('adm_rua', null, ['class' => 'form-control']) !!}
</div>

<!-- Adm Complem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_complem', __('models/admin.fields.adm_complem').':') !!}
    {!! Form::text('adm_complem', null, ['class' => 'form-control']) !!}
</div>

<!-- Adm Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_bairro', __('models/admin.fields.adm_bairro').':') !!}
    {!! Form::text('adm_bairro', null, ['class' => 'form-control']) !!}
</div>

<!-- Adm Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_cidade', __('models/admin.fields.adm_cidade').':') !!}
    {!! Form::text('adm_cidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Adm Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_estado', __('models/admin.fields.adm_estado').':') !!}
    {!! Form::text('adm_estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Adm Cep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_cep', __('models/admin.fields.adm_cep').':') !!}
    {!! Form::number('adm_cep', null, ['class' => 'form-control']) !!}
</div>

<!-- Adm Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_email', __('models/admin.fields.adm_email').':') !!}
    {!! Form::text('adm_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Adm Banco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_banco', __('models/admin.fields.adm_banco').':') !!}
    {!! Form::number('adm_banco', null, ['class' => 'form-control']) !!}
</div>

<!-- Adm Agencia Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_agencia', __('models/admin.fields.adm_agencia').':') !!}
    {!! Form::text('adm_agencia', null, ['class' => 'form-control']) !!}
</div>

<!-- Adm Conta Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_conta', __('models/admin.fields.adm_conta').':') !!}
    {!! Form::text('adm_conta', null, ['class' => 'form-control']) !!}
</div>

<!-- Adm Saldo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_saldo', __('models/admin.fields.adm_saldo').':') !!}
    {!! Form::number('adm_saldo', null, ['class' => 'form-control']) !!}
</div>

<!-- Adm Login Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_login', __('models/admin.fields.adm_login').':') !!}
    {!! Form::text('adm_login', null, ['class' => 'form-control']) !!}
</div>

<!-- Adm Senha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_senha', __('models/admin.fields.adm_senha').':') !!}
    {!! Form::text('adm_senha', null, ['class' => 'form-control']) !!}
</div>

<!-- Adm Mudasenha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_mudasenha', __('models/admin.fields.adm_mudasenha').':') !!}
    {!! Form::text('adm_mudasenha', null, ['class' => 'form-control']) !!}
</div>

<!-- Adm Telefone1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_telefone1', __('models/admin.fields.adm_telefone1').':') !!}
    {!! Form::text('adm_telefone1', null, ['class' => 'form-control']) !!}
</div>

<!-- Adm Telefone2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_telefone2', __('models/admin.fields.adm_telefone2').':') !!}
    {!! Form::text('adm_telefone2', null, ['class' => 'form-control']) !!}
</div>

<!-- Adm Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_celular', __('models/admin.fields.adm_celular').':') !!}
    {!! Form::text('adm_celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Adm Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_data', __('models/admin.fields.adm_data').':') !!}
    {!! Form::text('adm_data', null, ['class' => 'form-control','id'=>'adm_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#adm_data').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Adm Contato Field -->
<div class="form-group col-sm-6">
    {!! Form::label('adm_contato', __('models/admin.fields.adm_contato').':') !!}
    {!! Form::text('adm_contato', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('admins.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

<!-- Age Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_nome', __('models/agentes.fields.age_nome').':') !!}
    {!! Form::text('age_nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Login Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_login', __('models/agentes.fields.age_login').':') !!}
    {!! Form::text('age_login', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Senha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_senha', __('models/agentes.fields.age_senha').':') !!}
    {!! Form::text('age_senha', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Comissao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_comissao', __('models/agentes.fields.age_comissao').':') !!}
    {!! Form::number('age_comissao', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Endereco Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_endereco', __('models/agentes.fields.age_endereco').':') !!}
    {!! Form::text('age_endereco', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Bairro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_bairro', __('models/agentes.fields.age_bairro').':') !!}
    {!! Form::text('age_bairro', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Cidade Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_cidade', __('models/agentes.fields.age_cidade').':') !!}
    {!! Form::text('age_cidade', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Estado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_estado', __('models/agentes.fields.age_estado').':') !!}
    {!! Form::text('age_estado', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Cep Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_cep', __('models/agentes.fields.age_cep').':') !!}
    {!! Form::number('age_cep', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_email', __('models/agentes.fields.age_email').':') !!}
    {!! Form::text('age_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_status', __('models/agentes.fields.age_status').':') !!}
    {!! Form::text('age_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_data', __('models/agentes.fields.age_data').':') !!}
    {!! Form::text('age_data', null, ['class' => 'form-control','id'=>'age_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#age_data').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Age Telefone1 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_telefone1', __('models/agentes.fields.age_telefone1').':') !!}
    {!! Form::text('age_telefone1', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Telefone2 Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_telefone2', __('models/agentes.fields.age_telefone2').':') !!}
    {!! Form::text('age_telefone2', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Celular Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_celular', __('models/agentes.fields.age_celular').':') !!}
    {!! Form::text('age_celular', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Mudasenha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_mudasenha', __('models/agentes.fields.age_mudasenha').':') !!}
    {!! Form::text('age_mudasenha', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_representante_id', __('models/agentes.fields.age_representante_id').':') !!}
    {!! Form::number('age_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Linguagem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_linguagem', __('models/agentes.fields.age_linguagem').':') !!}
    {!! Form::text('age_linguagem', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Incluir Users Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_incluir_users', __('models/agentes.fields.age_incluir_users').':') !!}
    {!! Form::text('age_incluir_users', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Alterar Users Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_alterar_users', __('models/agentes.fields.age_alterar_users').':') !!}
    {!! Form::text('age_alterar_users', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Acesso Cabines Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_acesso_cabines', __('models/agentes.fields.age_acesso_cabines').':') !!}
    {!! Form::text('age_acesso_cabines', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Acesso Creditos Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_acesso_creditos', __('models/agentes.fields.age_acesso_creditos').':') !!}
    {!! Form::text('age_acesso_creditos', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Tabelaespecial Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_tabelaespecial_id', __('models/agentes.fields.age_tabelaespecial_id').':') !!}
    {!! Form::number('age_tabelaespecial_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Percacrescimo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_percacrescimo', __('models/agentes.fields.age_percacrescimo').':') !!}
    {!! Form::number('age_percacrescimo', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Saldoreal Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_saldoreal', __('models/agentes.fields.age_saldoreal').':') !!}
    {!! Form::number('age_saldoreal', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Atualizado Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_atualizado', __('models/agentes.fields.age_atualizado').':') !!}
    {!! Form::text('age_atualizado', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Tptarifacao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_tptarifacao', __('models/agentes.fields.age_tptarifacao').':') !!}
    {!! Form::text('age_tptarifacao', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Com Ident Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_com_ident_nome', __('models/agentes.fields.age_com_ident_nome').':') !!}
    {!! Form::text('age_com_ident_nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Ligacoes Emcurso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_ligacoes_emcurso', __('models/agentes.fields.age_ligacoes_emcurso').':') !!}
    {!! Form::text('age_ligacoes_emcurso', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Liberar Inicializar Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_liberar_inicializar', __('models/agentes.fields.age_liberar_inicializar').':') !!}
    {!! Form::text('age_liberar_inicializar', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Controle Lastro Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_controle_lastro', __('models/agentes.fields.age_controle_lastro').':') !!}
    {!! Form::text('age_controle_lastro', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Qtde Colunas Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_qtde_colunas', __('models/agentes.fields.age_qtde_colunas').':') !!}
    {!! Form::text('age_qtde_colunas', null, ['class' => 'form-control']) !!}
</div>

<!-- Age Como Revenda Field -->
<div class="form-group col-sm-6">
    {!! Form::label('age_como_revenda', __('models/agentes.fields.age_como_revenda').':') !!}
    {!! Form::text('age_como_revenda', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('agentes.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

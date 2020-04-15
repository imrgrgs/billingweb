<!-- Usr Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_fornecedor_id', __('models/usuarios.fields.usr_fornecedor_id').':') !!}
    {!! Form::number('usr_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_representante_id', __('models/usuarios.fields.usr_representante_id').':') !!}
    {!! Form::number('usr_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Agente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_agente_id', __('models/usuarios.fields.usr_agente_id').':') !!}
    {!! Form::number('usr_agente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Login Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_login', __('models/usuarios.fields.usr_login').':') !!}
    {!! Form::text('usr_login', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Senha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_senha', __('models/usuarios.fields.usr_senha').':') !!}
    {!! Form::text('usr_senha', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Status Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_status', __('models/usuarios.fields.usr_status').':') !!}
    {!! Form::text('usr_status', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Permissao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('usr_permissao', __('models/usuarios.fields.usr_permissao').':') !!}
    {!! Form::textarea('usr_permissao', null, ['class' => 'form-control']) !!}
</div>
@push('scripts')
    <script type="text/javascript">
        CKEDITOR.replace('usr_permissao', {
          language: '{{ strtolower(config('app.locale')) }}',
          height: '150px',
        })
    </script>
@endpush


<!-- Usr Linguagem Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_linguagem', __('models/usuarios.fields.usr_linguagem').':') !!}
    {!! Form::text('usr_linguagem', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Nome Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_nome', __('models/usuarios.fields.usr_nome').':') !!}
    {!! Form::text('usr_nome', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Tpmenu Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_tpmenu_id', __('models/usuarios.fields.usr_tpmenu_id').':') !!}
    {!! Form::number('usr_tpmenu_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Admin Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_admin_id', __('models/usuarios.fields.usr_admin_id').':') !!}
    {!! Form::number('usr_admin_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Assinante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_assinante_id', __('models/usuarios.fields.usr_assinante_id').':') !!}
    {!! Form::number('usr_assinante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Foto Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_foto', __('models/usuarios.fields.usr_foto').':') !!}
    {!! Form::text('usr_foto', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Email Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_email', __('models/usuarios.fields.usr_email').':') !!}
    {!! Form::text('usr_email', null, ['class' => 'form-control']) !!}
</div>

<!-- Usr Fone Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usr_fone', __('models/usuarios.fields.usr_fone').':') !!}
    {!! Form::text('usr_fone', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('usuarios.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

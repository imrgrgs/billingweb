<!-- Tip Descricao Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tip_descricao', __('models/tpmenus.fields.tip_descricao').':') !!}
    {!! Form::text('tip_descricao', null, ['class' => 'form-control']) !!}
</div>

<!-- Tip Menu Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tip_menu', __('models/tpmenus.fields.tip_menu').':') !!}
    {!! Form::text('tip_menu', null, ['class' => 'form-control']) !!}
</div>

<!-- Tip Fornecedor Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tip_fornecedor_id', __('models/tpmenus.fields.tip_fornecedor_id').':') !!}
    {!! Form::number('tip_fornecedor_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tip Representante Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tip_representante_id', __('models/tpmenus.fields.tip_representante_id').':') !!}
    {!! Form::number('tip_representante_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tip Agente Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('tip_agente_id', __('models/tpmenus.fields.tip_agente_id').':') !!}
    {!! Form::number('tip_agente_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Tip Permissao Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('tip_permissao', __('models/tpmenus.fields.tip_permissao').':') !!}
    {!! Form::textarea('tip_permissao', null, ['class' => 'form-control']) !!}
</div>
@push('scripts')
    <script type="text/javascript">
        CKEDITOR.replace('tip_permissao', {
          language: '{{ strtolower(config('app.locale')) }}',
          height: '150px',
        })
    </script>
@endpush


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('tpMenus.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

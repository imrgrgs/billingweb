<!-- Rel Username Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rel_username', __('models/relacao.fields.rel_username').':') !!}
    {!! Form::text('rel_username', null, ['class' => 'form-control']) !!}
</div>

<!-- Rel Username Amigo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('rel_username_amigo', __('models/relacao.fields.rel_username_amigo').':') !!}
    {!! Form::text('rel_username_amigo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('relacaos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

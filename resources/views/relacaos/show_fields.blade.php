<!-- Rel Username Field -->
<div class="form-group">
    {!! Form::label('rel_username', __('models/relacao.fields.rel_username').':') !!}
    <p>{{ $relacao->rel_username }}</p>
</div>

<!-- Rel Username Amigo Field -->
<div class="form-group">
    {!! Form::label('rel_username_amigo', __('models/relacao.fields.rel_username_amigo').':') !!}
    <p>{{ $relacao->rel_username_amigo }}</p>
</div>


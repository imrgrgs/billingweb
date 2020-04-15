<!-- Blq User Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('blq_user_id', __('models/fonesbloq.fields.blq_user_id').':') !!}
    {!! Form::number('blq_user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('fonesBloqs.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

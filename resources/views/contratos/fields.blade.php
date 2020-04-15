<!-- Cnt Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cnt_id', __('models/contrato.fields.cnt_id').':') !!}
    {!! Form::number('cnt_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Cnt Contrato Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('cnt_contrato', __('models/contrato.fields.cnt_contrato').':') !!}
    {!! Form::textarea('cnt_contrato', null, ['class' => 'form-control']) !!}
</div>
@push('scripts')
    <script type="text/javascript">
        CKEDITOR.replace('cnt_contrato', {
          language: '{{ strtolower(config('app.locale')) }}',
          height: '150px',
        })
    </script>
@endpush


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('contratos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

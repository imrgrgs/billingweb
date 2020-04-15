<!-- Aud Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aud_data', __('models/audios.fields.aud_data').':') !!}
    {!! Form::text('aud_data', null, ['class' => 'form-control','id'=>'aud_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#aud_data').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Aud Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aud_hora', __('models/audios.fields.aud_hora').':') !!}
    {!! Form::text('aud_hora', null, ['class' => 'form-control']) !!}
</div>

<!-- Aud Assinante Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aud_assinante', __('models/audios.fields.aud_assinante').':') !!}
    {!! Form::text('aud_assinante', null, ['class' => 'form-control']) !!}
</div>

<!-- Aud Destino Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aud_destino', __('models/audios.fields.aud_destino').':') !!}
    {!! Form::text('aud_destino', null, ['class' => 'form-control']) !!}
</div>

<!-- Aud Tempo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aud_tempo', __('models/audios.fields.aud_tempo').':') !!}
    {!! Form::number('aud_tempo', null, ['class' => 'form-control']) !!}
</div>

<!-- Aud Arquivo Field -->
<div class="form-group col-sm-6">
    {!! Form::label('aud_arquivo', __('models/audios.fields.aud_arquivo').':') !!}
    {!! Form::text('aud_arquivo', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('audio.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

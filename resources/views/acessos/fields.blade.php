<!-- Ace Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ace_data', __('models/acessos.fields.ace_data').':') !!}
    {!! Form::text('ace_data', null, ['class' => 'form-control','id'=>'ace_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#ace_data').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Ace Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ace_hora', __('models/acessos.fields.ace_hora').':') !!}
    {!! Form::text('ace_hora', null, ['class' => 'form-control']) !!}
</div>

<!-- Ace Ip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ace_ip', __('models/acessos.fields.ace_ip').':') !!}
    {!! Form::text('ace_ip', null, ['class' => 'form-control']) !!}
</div>

<!-- Ace Login Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ace_login', __('models/acessos.fields.ace_login').':') !!}
    {!! Form::text('ace_login', null, ['class' => 'form-control']) !!}
</div>

<!-- Ace Senha Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ace_senha', __('models/acessos.fields.ace_senha').':') !!}
    {!! Form::text('ace_senha', null, ['class' => 'form-control']) !!}
</div>

<!-- Ace Sucesso Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ace_sucesso', __('models/acessos.fields.ace_sucesso').':') !!}
    {!! Form::text('ace_sucesso', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('acessos.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

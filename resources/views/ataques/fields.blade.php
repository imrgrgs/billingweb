<!-- Ata Data Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ata_data', __('models/ataque.fields.ata_data').':') !!}
    {!! Form::text('ata_data', null, ['class' => 'form-control','id'=>'ata_data']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#ata_data').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Ata Hora Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ata_hora', __('models/ataque.fields.ata_hora').':') !!}
    {!! Form::text('ata_hora', null, ['class' => 'form-control']) !!}
</div>

<!-- Ata Login Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ata_login', __('models/ataque.fields.ata_login').':') !!}
    {!! Form::text('ata_login', null, ['class' => 'form-control']) !!}
</div>

<!-- Ata Ip Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ata_ip', __('models/ataque.fields.ata_ip').':') !!}
    {!! Form::text('ata_ip', null, ['class' => 'form-control']) !!}
</div>

<!-- Ata Temp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('ata_temp', __('models/ataque.fields.ata_temp').':') !!}
    {!! Form::text('ata_temp', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('ataques.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

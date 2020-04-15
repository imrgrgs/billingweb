<!-- Originalname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('originalName', __('models/bvaudio.fields.originalName').':') !!}
    {!! Form::text('originalName', null, ['class' => 'form-control']) !!}
</div>

<!-- Size Field -->
<div class="form-group col-sm-6">
    {!! Form::label('size', __('models/bvaudio.fields.size').':') !!}
    {!! Form::number('size', null, ['class' => 'form-control']) !!}
</div>

<!-- Time Field -->
<div class="form-group col-sm-6">
    {!! Form::label('time', __('models/bvaudio.fields.time').':') !!}
    {!! Form::number('time', null, ['class' => 'form-control']) !!}
</div>

<!-- Generatedname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('generatedName', __('models/bvaudio.fields.generatedName').':') !!}
    {!! Form::text('generatedName', null, ['class' => 'form-control']) !!}
</div>

<!-- Generatedpath Field -->
<div class="form-group col-sm-6">
    {!! Form::label('generatedPath', __('models/bvaudio.fields.generatedPath').':') !!}
    {!! Form::text('generatedPath', null, ['class' => 'form-control']) !!}
</div>

<!-- Gsmname Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gsmName', __('models/bvaudio.fields.gsmName').':') !!}
    {!! Form::text('gsmName', null, ['class' => 'form-control']) !!}
</div>

<!-- Gsmpath Field -->
<div class="form-group col-sm-6">
    {!! Form::label('gsmPath', __('models/bvaudio.fields.gsmPath').':') !!}
    {!! Form::text('gsmPath', null, ['class' => 'form-control']) !!}
</div>

<!-- Forid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('forId', __('models/bvaudio.fields.forId').':') !!}
    {!! Form::number('forId', null, ['class' => 'form-control']) !!}
</div>

<!-- Repid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('repId', __('models/bvaudio.fields.repId').':') !!}
    {!! Form::number('repId', null, ['class' => 'form-control']) !!}
</div>

<!-- Usrid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('usrId', __('models/bvaudio.fields.usrId').':') !!}
    {!! Form::number('usrId', null, ['class' => 'form-control']) !!}
</div>

<!-- Datecreated Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dateCreated', __('models/bvaudio.fields.dateCreated').':') !!}
    {!! Form::text('dateCreated', null, ['class' => 'form-control','id'=>'dateCreated']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#dateCreated').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('bvaudios.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>

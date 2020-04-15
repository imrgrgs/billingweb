<!-- Calldate Field -->
<div class="form-group col-sm-6">
    {!! Form::label('calldate', __('models/cdr.fields.calldate').':') !!}
    {!! Form::text('calldate', null, ['class' => 'form-control','id'=>'calldate']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#calldate').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Clid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('clid', __('models/cdr.fields.clid').':') !!}
    {!! Form::text('clid', null, ['class' => 'form-control']) !!}
</div>

<!-- Src Field -->
<div class="form-group col-sm-6">
    {!! Form::label('src', __('models/cdr.fields.src').':') !!}
    {!! Form::text('src', null, ['class' => 'form-control']) !!}
</div>

<!-- Dst Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dst', __('models/cdr.fields.dst').':') !!}
    {!! Form::text('dst', null, ['class' => 'form-control']) !!}
</div>

<!-- Dcontext Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dcontext', __('models/cdr.fields.dcontext').':') !!}
    {!! Form::text('dcontext', null, ['class' => 'form-control']) !!}
</div>

<!-- Channel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('channel', __('models/cdr.fields.channel').':') !!}
    {!! Form::text('channel', null, ['class' => 'form-control']) !!}
</div>

<!-- Dstchannel Field -->
<div class="form-group col-sm-6">
    {!! Form::label('dstchannel', __('models/cdr.fields.dstchannel').':') !!}
    {!! Form::text('dstchannel', null, ['class' => 'form-control']) !!}
</div>

<!-- Lastapp Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastapp', __('models/cdr.fields.lastapp').':') !!}
    {!! Form::text('lastapp', null, ['class' => 'form-control']) !!}
</div>

<!-- Lastdata Field -->
<div class="form-group col-sm-6">
    {!! Form::label('lastdata', __('models/cdr.fields.lastdata').':') !!}
    {!! Form::text('lastdata', null, ['class' => 'form-control']) !!}
</div>

<!-- Start Field -->
<div class="form-group col-sm-6">
    {!! Form::label('start', __('models/cdr.fields.start').':') !!}
    {!! Form::text('start', null, ['class' => 'form-control','id'=>'start']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#start').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Answer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('answer', __('models/cdr.fields.answer').':') !!}
    {!! Form::text('answer', null, ['class' => 'form-control','id'=>'answer']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#answer').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- End Field -->
<div class="form-group col-sm-6">
    {!! Form::label('end', __('models/cdr.fields.end').':') !!}
    {!! Form::text('end', null, ['class' => 'form-control','id'=>'end']) !!}
</div>

@push('scripts')
    <script type="text/javascript">
        $('#end').datepicker({
        format: 'yyyy-mm-dd', //'dd/mm/yyyy',
            todayBtn: "linked",
            clearBtn: true,
            language: "{{ config('app.locale') }}",
            autoclose: true,
            todayHighlight: true
        })

    </script>
@endpush


<!-- Duration Field -->
<div class="form-group col-sm-6">
    {!! Form::label('duration', __('models/cdr.fields.duration').':') !!}
    {!! Form::number('duration', null, ['class' => 'form-control']) !!}
</div>

<!-- Billsec Field -->
<div class="form-group col-sm-6">
    {!! Form::label('billsec', __('models/cdr.fields.billsec').':') !!}
    {!! Form::number('billsec', null, ['class' => 'form-control']) !!}
</div>

<!-- Disposition Field -->
<div class="form-group col-sm-6">
    {!! Form::label('disposition', __('models/cdr.fields.disposition').':') !!}
    {!! Form::text('disposition', null, ['class' => 'form-control']) !!}
</div>

<!-- Amaflags Field -->
<div class="form-group col-sm-6">
    {!! Form::label('amaflags', __('models/cdr.fields.amaflags').':') !!}
    {!! Form::number('amaflags', null, ['class' => 'form-control']) !!}
</div>

<!-- Accountcode Field -->
<div class="form-group col-sm-6">
    {!! Form::label('accountcode', __('models/cdr.fields.accountcode').':') !!}
    {!! Form::text('accountcode', null, ['class' => 'form-control']) !!}
</div>

<!-- Uniqueid Field -->
<div class="form-group col-sm-6">
    {!! Form::label('uniqueid', __('models/cdr.fields.uniqueid').':') !!}
    {!! Form::text('uniqueid', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit(__('crud.save'), ['class' => 'btn btn-primary']) !!}
    <a href="{{ route('cdrs.index') }}" class="btn btn-default">@lang('crud.cancel')</a>
</div>
